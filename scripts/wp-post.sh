#!/usr/bin/env bash
# =====================================================================
#  wp-post.sh — Encanamento de postagem no blog da MDotti via REST API
# ---------------------------------------------------------------------
#  Cria posts (rascunho por padrão) no WordPress usando a REST API
#  (/wp-json/wp/v2/posts) autenticada com Application Password.
#
#  Config: variáveis de ambiente OU o arquivo scripts/.env.wp (git-ignored):
#     WP_BASE_URL       ex.: https://mdotti.com
#     WP_USER           login do WordPress (admin)
#     WP_APP_PASSWORD   Application Password (com ou sem espaços)
#
#  Obs.: homolog.mdotti.com está atrás de auth básica de SERVIDOR, que colide
#  com o Basic Auth do Application Password. Para automatizar o homolog seria
#  preciso liberar /wp-json dessa proteção — por ora, use produção.
#
#  Uso:
#     ./wp-post.sh whoami                          # testa a autenticação
#     ./wp-post.sh cats                            # lista categorias (id + nome)
#     ./wp-post.sh tags                            # lista tags (id + nome)
#     ./wp-post.sh cat-id "Segurança"              # id da categoria (cria se faltar)
#     ./wp-post.sh tag-id "Ransomware"             # id da tag (cria se faltar)
#     ./wp-post.sh upload imagem.jpg [--alt "texto"] [--caption "legenda"]
#     ./wp-post.sh create --title "T" --html corpo.html \
#                  [--status draft|publish|future|pending] \
#                  [--excerpt "resumo"] \
#                  [--categories 3,7] [--tags 12,15] \
#                  [--slug meu-post] [--date 2026-08-01T09:00:00] \
#                  [--featured 123]                # id de mídia já existente, OU
#                  [--featured-file capa.jpg [--featured-alt "..."]
#                                    [--featured-caption "..."]]  # sobe + define
#
#  Padrão de segurança: status = draft. Publicar exige --status publish
#  explícito (guardrail "humano no loop" do DanOS).
# =====================================================================
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ENV_FILE="$SCRIPT_DIR/.env.wp"
[ -f "$ENV_FILE" ] && { set -a; . "$ENV_FILE"; set +a; }

die() { echo "erro: $*" >&2; exit 1; }

: "${WP_BASE_URL:?defina WP_BASE_URL (ex.: https://mdotti.com) em env ou scripts/.env.wp}"
: "${WP_USER:?defina WP_USER}"
: "${WP_APP_PASSWORD:?defina WP_APP_PASSWORD (Application Password do WordPress)}"

API="${WP_BASE_URL%/}/wp-json/wp/v2"

# curl base: --user faz o Basic Auth do Application Password;
# --fail-with-body retorna corpo do erro e código !=0 em respostas >=400.
_curl() {
  curl --fail-with-body -sS -m 30 --user "$WP_USER:$WP_APP_PASSWORD" "$@"
}

cmd_whoami() {
  _curl "${WP_BASE_URL%/}/wp-json/wp/v2/users/me?context=edit" \
    | jq '{id, name, slug, roles, capabilities: (.capabilities|keys|map(select(test("publish|edit_posts"))))}'
}

cmd_cats() { _curl "$API/categories?per_page=100&_fields=id,name,slug" | jq -r '.[] | "\(.id)\t\(.name)\t(\(.slug))"'; }
cmd_tags() { _curl "$API/tags?per_page=100&_fields=id,name,slug"       | jq -r '.[] | "\(.id)\t\(.name)\t(\(.slug))"'; }

# Resolve o id de uma categoria pelo nome; cria se não existir. Ecoa só o id.
cmd_cat_id() {
  local name="${1:?informe o nome da categoria}"
  local id
  id="$(_curl "$API/categories?search=$(jq -rn --arg s "$name" '$s|@uri')&_fields=id,name" \
        | jq -r --arg n "$name" 'map(select(.name==$n)) | .[0].id // empty')"
  if [ -z "$id" ]; then
    id="$(_curl -X POST "$API/categories" -H 'Content-Type: application/json' \
          --data "$(jq -n --arg n "$name" '{name:$n}')" | jq -r '.id')"
  fi
  echo "$id"
}

# Resolve o id de uma tag pelo nome; cria se não existir. Ecoa só o id.
cmd_tag_id() {
  local name="${1:?informe o nome da tag}"
  local id
  id="$(_curl "$API/tags?search=$(jq -rn --arg s "$name" '$s|@uri')&_fields=id,name" \
        | jq -r --arg n "$name" 'map(select(.name==$n)) | .[0].id // empty')"
  if [ -z "$id" ]; then
    id="$(_curl -X POST "$API/tags" -H 'Content-Type: application/json' \
          --data "$(jq -n --arg n "$name" '{name:$n}')" | jq -r '.id')"
  fi
  echo "$id"
}

# Detecta o mime-type de uma imagem (via `file`, com fallback por extensão).
_mime() {
  local f="$1" m
  m="$(file --mime-type -b "$f" 2>/dev/null || true)"
  case "$m" in image/*) echo "$m"; return;; esac
  case "${f,,}" in
    *.jpg|*.jpeg) echo image/jpeg;;
    *.png)        echo image/png;;
    *.gif)        echo image/gif;;
    *.webp)       echo image/webp;;
    *.svg)        echo image/svg+xml;;
    *)            echo "${m:-application/octet-stream}";;
  esac
}

# Sobe um arquivo para a biblioteca de mídia e (opcional) grava alt/title/caption.
# Ecoa o JSON da mídia. Args: <arquivo> [alt] [title] [caption]
_upload_media() {
  local file="$1" alt="${2:-}" title="${3:-}" caption="${4:-}"
  [ -f "$file" ] || die "imagem não encontrada: $file"
  local base mime obj id
  base="$(basename "$file")"
  mime="$(_mime "$file")"
  obj="$(_curl -X POST "$API/media" \
      -H "Content-Disposition: attachment; filename=\"$base\"" \
      -H "Content-Type: $mime" \
      --data-binary "@$file")"
  id="$(echo "$obj" | jq -r '.id')"
  if [ -n "$alt" ] || [ -n "$title" ] || [ -n "$caption" ]; then
    obj="$(_curl -X POST "$API/media/$id" -H 'Content-Type: application/json' \
        --data "$(jq -n --arg a "$alt" --arg t "$title" --arg c "$caption" \
          '{} + (if $a != "" then {alt_text:$a} else {} end)
              + (if $t != "" then {title:$t}    else {} end)
              + (if $c != "" then {caption:$c}  else {} end)')")"
  fi
  echo "$obj"
}

cmd_upload() {
  local file="" alt="" title="" caption=""
  while [ $# -gt 0 ]; do
    case "$1" in
      --file|--image) file="$2"; shift 2;;
      --alt)     alt="$2"; shift 2;;
      --title)   title="$2"; shift 2;;
      --caption) caption="$2"; shift 2;;
      -*) die "argumento desconhecido: $1";;
      *) [ -z "$file" ] && { file="$1"; shift; } || die "argumento extra: $1";;
    esac
  done
  [ -n "$file" ] || die "informe a imagem: upload <arquivo> [--alt ...] [--caption ...]"
  _upload_media "$file" "$alt" "$title" "$caption" \
    | jq '{id, source_url, mime: .mime_type, alt: .alt_text}'
}

cmd_create() {
  local title="" html_file="" status="draft" excerpt="" slug="" date="" featured=""
  local categories="" tags="" featured_file="" featured_alt="" featured_caption=""
  while [ $# -gt 0 ]; do
    case "$1" in
      --title)            title="$2"; shift 2;;
      --html)             html_file="$2"; shift 2;;
      --status)           status="$2"; shift 2;;
      --excerpt)          excerpt="$2"; shift 2;;
      --slug)             slug="$2"; shift 2;;
      --date)             date="$2"; shift 2;;
      --featured)         featured="$2"; shift 2;;
      --featured-file|--featured-image) featured_file="$2"; shift 2;;
      --featured-alt)     featured_alt="$2"; shift 2;;
      --featured-caption) featured_caption="$2"; shift 2;;
      --categories)       categories="$2"; shift 2;;
      --tags)             tags="$2"; shift 2;;
      *) die "argumento desconhecido: $1";;
    esac
  done
  [ -n "$title" ]     || die "--title é obrigatório"
  [ -n "$html_file" ] || die "--html <arquivo> é obrigatório"
  [ -f "$html_file" ] || die "arquivo não encontrado: $html_file"
  case "$status" in draft|publish|future|pending|private) ;; *) die "status inválido: $status";; esac
  [ "$status" = "future" ] && [ -z "$date" ] && die "status=future exige --date (ISO 8601)"
  [ -n "$featured" ] && [ -n "$featured_file" ] && die "use --featured OU --featured-file, não os dois"

  # Imagem destacada: sobe o arquivo e usa o id retornado.
  if [ -n "$featured_file" ]; then
    featured="$(_upload_media "$featured_file" "$featured_alt" "" "$featured_caption" | jq -r '.id')"
    echo "imagem destacada enviada (media id=$featured)" >&2
  fi

  local content; content="$(cat "$html_file")"

  # Monta o corpo JSON com jq (escapa tudo com segurança).
  local body; body="$(jq -n \
    --arg title "$title" --arg content "$content" --arg status "$status" \
    --arg excerpt "$excerpt" --arg slug "$slug" --arg date "$date" \
    --arg featured "$featured" --arg cats "$categories" --arg tags "$tags" \
    '{title:$title, content:$content, status:$status}
     + (if $excerpt != "" then {excerpt:$excerpt} else {} end)
     + (if $slug    != "" then {slug:$slug} else {} end)
     + (if $date    != "" then {date:$date} else {} end)
     + (if $featured!= "" then {featured_media:($featured|tonumber)} else {} end)
     + (if $cats    != "" then {categories:($cats|split(",")|map(tonumber))} else {} end)
     + (if $tags    != "" then {tags:($tags|split(",")|map(tonumber))} else {} end)')"

  local resp; resp="$(_curl -X POST "$API/posts" \
      -H 'Content-Type: application/json' --data "$body")"
  echo "$resp" | jq '{id, status, slug, link, edit: ("'"${WP_BASE_URL%/}"'/wp-admin/post.php?action=edit&post="+(.id|tostring))}'
}

case "${1:-}" in
  whoami) shift; cmd_whoami "$@";;
  cats)   shift; cmd_cats "$@";;
  tags)   shift; cmd_tags "$@";;
  cat-id) shift; cmd_cat_id "$@";;
  tag-id) shift; cmd_tag_id "$@";;
  upload) shift; cmd_upload "$@";;
  create) shift; cmd_create "$@";;
  ""|-h|--help) sed -n '2,44p' "${BASH_SOURCE[0]}";;
  *) die "comando desconhecido: $1  (use: whoami|cats|tags|cat-id|tag-id|upload|create)";;
esac

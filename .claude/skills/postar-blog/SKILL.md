---
name: postar-blog
description: Publica um artigo no blog do site da MDotti (WordPress em mdotti.com) via REST API, usando o script scripts/wp-post.sh e Application Password. Use quando o usuário quiser postar/subir/publicar um texto no blog, transformar um artigo pronto em post, ou agendar uma publicação. Converte o texto em HTML, propõe tags automaticamente com base no assunto e publica direto (padrão do Danilo — artigos entregues aqui já vieram revisados). Para ESCREVER o artigo, use antes a skill redigir-artigo-blog.
---

# Postar no blog (MDotti — publicação técnica)

Esta skill cuida do **encanamento de publicação**: pega um artigo pronto,
converte para HTML e cria o post no WordPress via `scripts/wp-post.sh`
(REST API + Application Password). **Não é a skill de redação** — se o usuário
ainda não tem o texto pronto, faça o handoff para `redigir-artigo-blog`, que
vive neste mesmo repositório (`.claude/skills/redigir-artigo-blog/`) e segue o
`blog/DIRETRIZES.md` e o tom da marca.

**Default de status:** `publish` (o Danilo revisa o texto no arquivo do
rascunho antes de mandar postar — a etapa de rascunho no WP é redundante).
Só use `draft` quando o usuário pedir explicitamente ou quando o artigo
ainda precisar de revisão.

## 1. Contexto e handoff da redação

Caminhos relativos a este `SKILL.md`:

- `../../../CLAUDE.md` → diretrizes do repositório site-mdotti (deploy, estrutura).
- `../../../../../CLAUDE.md` → identidade e tom da marca MDotti.
- `../../../blog/DIRETRIZES.md` → diretrizes de estilo/SEO do blog.

Fluxo:
- Se o usuário **já entregou o artigo pronto** (na conversa ou como arquivo em
  `blog/rascunhos/`) → siga para a etapa 2.
- Se ele só tem **tema, tópicos ou uma transcrição** → invoque/aplique a skill
  `redigir-artigo-blog` primeiro para produzir o texto, e só então volte aqui
  para publicar. As duas skills vivem neste repositório: redigir e publicar são
  etapas da mesma sessão.

## 2. Reunir os metadados do post

Confirme com o usuário (não invente):

1. **Título** (H1 do post — não repita dentro do corpo HTML).
2. **Resumo/excerpt** (opcional, mas recomendado p/ SEO — se o arquivo já tem
   uma meta descrição, reaproveite).
3. **Categoria(s)** — por nome; a skill resolve os IDs (etapa 4).
4. **Tags** — **proposta automática** (etapa 5). Só peça ao usuário se ele
   quiser especificar/vetar algo.
5. **Status**: por padrão `publish` (ver acima). `future` + `--date` se agendar.
6. **Imagem destacada**: o arquivo da imagem (capa) e, idealmente, um
   **texto alternativo** (`alt`) descritivo para SEO/acessibilidade.
7. **Slug** (opcional — se o arquivo do rascunho sugerir um, use).

### Checagem de fatos: pré-requisito para publicar

Antes de montar o `create`, verifique se o artigo cita número, data, valor,
comparação entre empresas ou declaração de terceiro. Se citar:

- O bloco "NÃO COLAR" do rascunho **precisa** trazer o rastro da checagem
  (data, fontes, confirmados, correções), gravado pela etapa 6 da skill
  `redigir-artigo-blog`. Sem esse registro, rode a skill **`fact-checker`**
  (global, em `~/.claude/skills/fact-checker/`) sobre o corpo do artigo **agora**,
  antes de publicar, e só siga com o resultado limpo.
- Se o rastro existir mas estiver **velho** em relação ao assunto (dado de
  mercado que muda rápido, artigo que ficou semanas na fila), reconfirme os
  números antes de publicar e avise o Danilo do que mudou.
- **Nenhum `[CONFIRMAR]` pode sobrar** no corpo nem no cabeçalho. Se sobrar, não
  publique: leve a pendência ao Danilo.

Texto já publicado e indexado com número errado é caro de corrigir, então este
passo não é opcional.

## 3. Converter o texto em HTML

O conteúdo do WordPress é HTML.

**Se o artigo já existe como arquivo em `blog/rascunhos/<slug>.html`** (saída da
skill `redigir-artigo-blog`), **reaproveite o corpo em vez de regerar**: copie o
trecho entre os comentários `INÍCIO DO CONTEÚDO` e `FIM DO CONTEÚDO`, removendo
o `<h1>` (ele vira o `--title` do post) e mantendo o resto como está. Assim o
que você revisou no arquivo é exatamente o que vai ao ar.

**Se o texto veio solto na conversa**, gere HTML limpo e semântico (não há
pandoc na máquina — produza o HTML diretamente):

- Parágrafos em `<p>`, subtítulos das seções em **`<h3>`** (o `<h1>` é o título
  do post e fica de fora do corpo), listas em `<ul>/<ol><li>`, ênfase em
  `<strong>/<em>`.
- **Antes de cada `<h3>`, inserir `<p>&nbsp;</p>`** — o tema não aplica
  `margin-top` suficiente nos H3. Mesma regra da skill de redação.
- Links reais em `<a href>`. Sem CSS inline, sem `<html>/<head>/<body>`.
- Preserve os termos corretos da marca (MDotti Tecnologia, MDStock, MDQuote,
  mdpentest, ZBoox, TPN).

> **Nível de heading:** o tema do site usa **H3** para as seções do corpo, não
> H2. Isso vale nas duas skills; não "corrija" para H2 na hora de publicar.

Salve o HTML num arquivo temporário no scratchpad (ex.: `corpo.html`) — **não**
crie arquivos de conteúdo dentro do repo.

## 4. Descobrir IDs de categorias

O `create` recebe IDs, não nomes. A partir da raiz do repo (`site-mdotti/`):

```bash
./scripts/wp-post.sh whoami          # pré-check: confirma auth (deve mostrar admin)
./scripts/wp-post.sh cats            # lista categorias: id  nome  (slug)
./scripts/wp-post.sh cat-id "Nome"   # resolve/cria categoria por nome -> ecoa o id
```

Se uma categoria não existir, **confirme com o usuário antes** de criá-la.

## 5. Tags automáticas (proposta baseada no assunto)

**Não peça as tags ao usuário — proponha.** Fluxo:

1. Liste as tags existentes: `./scripts/wp-post.sh tags` — retorna `id  nome  (slug)`.
2. Analise o corpo do artigo e proponha **4–6 tags** priorizando a taxonomia já
   estabelecida:
   - Reaproveite tags existentes sempre que houver correspondência de assunto
     (evita duplicatas tipo "ZBoox" / "zboox").
   - Adicione tags novas só quando o tema principal não está coberto (ex.:
     em um post sobre ransomware, se não existe uma tag "Ransomware", vale
     criar — é a palavra-chave central).
3. Mostre a proposta ao usuário em uma tabela curta (existentes vs. novas) e
   peça confirmação em uma frase — ele deve poder aceitar sem discutir.
4. Resolva os IDs (cria as novas se aprovado):

```bash
./scripts/wp-post.sh tag-id "Ransomware"   # ecoa o id; cria se faltar
```

Junte os IDs numa lista separada por vírgula para o `--tags` do `create`.

## 6. Imagem destacada

No WordPress a capa do post é a **"imagem destacada"** (`featured_media`), que
precisa estar na biblioteca de mídia. Há duas formas — prefira a primeira:

- **Tudo num passo (recomendado):** passe `--featured-file` direto no `create`;
  o script faz o upload e já define a imagem destacada. Use `--featured-alt`
  (e opcionalmente `--featured-caption`) para acessibilidade/SEO.
- **Em dois passos:** suba antes com `upload` (que ecoa o `id`) e depois passe
  esse id em `--featured <id>` no `create`:

```bash
./scripts/wp-post.sh upload /caminho/scratchpad/capa.jpg \
    --alt "Descrição da imagem" --caption "Crédito/legenda"
# -> { "id": 123, "source_url": "...", ... }
```

Peça o arquivo da imagem ao usuário se ele não tiver fornecido. Formatos aceitos:
jpg/png/gif/webp/svg. **Não** gere nem invente a imagem — use a que o usuário der.

## 7. Criar o post (publicação direta por padrão)

```bash
./scripts/wp-post.sh create \
  --title "Título do post" \
  --html /caminho/scratchpad/corpo.html \
  --status publish \
  --excerpt "Resumo para SEO" \
  --slug meu-post \
  --categories 5 \
  --tags 10,12,16,20,21,22 \
  --featured-file /caminho/scratchpad/capa.jpg --featured-alt "Descrição da capa"
```

Rascunho (só quando o usuário pedir explicitamente) ou agendar:

```bash
./scripts/wp-post.sh create --title "..." --html corpo.html    # status omitido = draft
./scripts/wp-post.sh create --title "..." --html corpo.html \
    --status future --date 2026-08-01T09:00:00
```

## 8. Entregar o resultado

O `create` devolve JSON com `id`, `status`, `link` (URL pública do post) e
`edit` (link do wp-admin). **Sempre entregue os dois links ao usuário** — o
público pra verificar como ficou publicado, o de edição pra ajustes rápidos.

Se o artigo veio de um arquivo em `blog/rascunhos/`, mova-o para
`blog/rascunhos/postados/` depois da publicação confirmada (crie a pasta se não
existir). Assim a pasta de rascunhos mostra só o que ainda está na fila.

## Atualizar tags/campos de um post existente

Se precisar atualizar um post já criado (adicionar tags depois, mudar título
etc.), o script não tem `update` — use `POST` direto no endpoint do post:

```bash
source scripts/.env.wp
AUTH=$(printf '%s:%s' "$WP_USER" "$WP_APP_PASSWORD" | base64 -w0)
curl -sS -X POST "$WP_BASE_URL/wp-json/wp/v2/posts/<ID>" \
     -H "Authorization: Basic $AUTH" -H "Content-Type: application/json" \
     -d '{"tags":[10,12,16,20,21,22]}'
```

**Cuidado:** o site tem hook/plugin que pode mudar o `status` de um post ao
atualizá-lo. Se quiser garantir que o rascunho permaneça rascunho, inclua
`"status":"draft"` no payload.

## 9. Purgar o cache de página (obrigatório)

O W3 Total Cache **não** invalida as páginas ao publicar um post. Sem purge, a
home e o `/blog/` continuam servindo o HTML antigo e o artigo novo só aparece
pela busca. Diagnóstico rápido: acrescentar qualquer query string à URL fura o
cache; se o post aparece com `?x=1` e não aparece sem, é cache.

Não dá para disparar pela REST API (o W3TC exige sessão de admin com nonce).
Peça ao usuário: **WP-Admin → Performance → Purge All Caches**. Se houve deploy
do tema junto, o purge vem **depois** dele.

## Erros comuns

- **`whoami` retorna 401 com a senha certa:** o servidor pode estar removendo o
  header `Authorization`. Fix no `.htaccess` da raiz do site (via FTP):
  `RewriteRule ^ - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]`.
- **`create` (POST) retorna 403 mas `whoami` (GET) passa:** firewall
  (Wordfence / WP Ghost) barrando o IP — liberar o IP de origem.
- **Application Passwords desativadas:** Wordfence pode desligá-las
  (Wordfence → All Options → "Disable WordPress application passwords").
- **Credenciais:** ficam em `scripts/.env.wp` (git-ignored). Se faltar, copie
  de `scripts/.env.wp.example` e gere um Application Password no perfil do WP.
- **Homolog não serve:** `homolog.mdotti.com` tem auth de servidor que colide
  com o Basic Auth do Application Password. Publique só em produção.
- **Cache de página em produção:** o post pode não aparecer na URL canônica
  logo após publicar por cache do plugin de página (LiteSpeed/WP Super Cache/
  W3TC). URL com query string (`?v=1`) já mostra o novo. Fix: "Purge All" no
  plugin de cache do WP-Admin — não dá para forçar via API.

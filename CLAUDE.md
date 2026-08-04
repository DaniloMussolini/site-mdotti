# CLAUDE.md — Diretrizes do Repositório MDotti

Este repositório contém a pasta `wp-content` do site da MDotti Tecnologia.

## 📌 Estrutura do Repositório
- **Raiz do repositório (`/`)** equivale à pasta `/wp-content/` da instalação do WordPress.
- **Tema Ativo:** `themes/mdotti/`
- **Imagens de Assets:** `themes/mdotti/img/assets/`
- **Estilos Principais (SCSS compilados para css/):**
  - `themes/mdotti/css/tpn.css` (Página TPN)
  - `themes/mdotti/css/modelos.css` (Página Modelos)
  - `themes/mdotti/css/workstation.css` (Página Workstation)
  - `themes/mdotti/style.css` (Meta do tema, versão e detalhes)

Fora do código do site (git-ignored, sincronizados só pelo Nextcloud):
- **`blog/`** — conteúdo editorial do blog: `DIRETRIZES.md` (tom, estrutura, SEO)
  e `rascunhos/` (artigos em HTML; publicados vão para `rascunhos/postados/`).
- **`scripts/`** — `wp-post.sh` (publicação via REST API) e `.env.wp` (credenciais).
- **`.claude/`** — skills do domínio.

---

## ✍️ Blog (mdotti.com/blog)

O blog é parte do site, então **redação e publicação vivem aqui** — não em
`redes-sociais/`. O ciclo completo roda em uma única sessão iniciada nesta pasta:

| Etapa | Skill / ferramenta | Saída |
|---|---|---|
| 1. Redigir | `redigir-artigo-blog` | `blog/rascunhos/<slug>.html` (prévia + corpo p/ colar) |
| 2. Checar fatos | `fact-checker` (global, em `~/.claude/skills/`) | fontes + correções registradas no cabeçalho do rascunho |
| 3. Imagem destacada | `gerar-prompt-imagem` (compartilhada, em `.agents/`) | prompt p/ IA de imagem |
| 4. Revisar | humano — Danilo lê o HTML do rascunho | aprovação |
| 5. Publicar | `postar-blog` → `scripts/wp-post.sh` | post no WP + links público/edição |
| 6. Arquivar | `postar-blog` | rascunho movido p/ `blog/rascunhos/postados/` |

A **checagem de fatos é obrigatória** sempre que o artigo citar número, data,
valor de mercado, nome de empresa ou declaração de terceiro. Roda depois de
redigir e antes da sua revisão, e deixa rastro no bloco "NÃO COLAR" do rascunho
(fontes, o que foi confirmado, o que foi corrigido). Artigo com `[CONFIRMAR]`
pendente não vai ao ar.

Regras editoriais obrigatórias (tom, SEO, sem travessões, sem emojis, grafia
**ZBoox**) estão em [`blog/DIRETRIZES.md`](blog/DIRETRIZES.md). O tema usa **H3**
nas seções do corpo, não H2.

**Publicar é ação externa e irreversível.** O `postar-blog` usa `--status publish`
por padrão porque a revisão acontece no arquivo do rascunho, antes do comando.
Confirme o texto com o Danilo antes de disparar o `create`.

> ⚠️ O conteúdo do blog **não é versionado neste repo** (`blog/` está no
> `.gitignore`): o repositório carrega o código do tema, não os artigos. Os
> artigos publicados vivem no banco do WordPress; os rascunhos, no Nextcloud.

---

## 🚀 Fluxo de Atualização (Git)

Ao receber pacotes de atualização estruturados com a pasta `wp-content/`, siga os passos abaixo para evitar duplicações no repositório:
```bash
# 1. Extrair o arquivo zip em pasta temporária
unzip -o ~/Downloads/mdotti-update.zip -d temp-update/

# 2. Copiar o conteúdo mesclando com a estrutura do repositório
cp -r temp-update/wp-content/* .

# 3. Remover a pasta temporária
rm -rf temp-update/

# 4. Comitar as alterações do tema
git add themes/mdotti/
git commit -m "feat: <descrição>"
git push origin main
```

---

## 🛠️ Sistema de Deploy Automatizado (GitHub Actions)

O deploy é feito de forma automatizada via FTP usando contas restritas à pasta do domínio correspondente. O diretório de destino no servidor FTP para ambos os ambientes é `wp-content/themes/mdotti/` (caminho relativo ao jail-root das contas).

### 1. Homologação (`homolog.mdotti.com`)
- **Gatilho:** Push no branch `main` que modifique arquivos em `themes/mdotti/**`.
- **Secrets no GitHub:** `FTP_HOMOLOG_USERNAME`, `FTP_HOMOLOG_PASSWORD` e `FTP_HOMOLOG_SERVER` (opcional).
- **Workflow:** `.github/workflows/deploy-homolog.yml`

### 2. Produção (`mdotti.com`)
- **Gatilho:** Envio de tags de versão (ex: `v1.0.0`).
- **Geração de Deploy:**
  ```bash
  git tag v1.0.3
  git push --tags
  ```
- **Secrets no GitHub:** `FTP_PROD_USERNAME`, `FTP_PROD_PASSWORD` e `FTP_PROD_SERVER` (opcional).
- **Workflow:** `.github/workflows/deploy-production.yml`

### 3. Disparo Manual
Ambos os fluxos possuem suporte a `workflow_dispatch` e podem ser disparados manualmente através do painel de **Actions** no GitHub.

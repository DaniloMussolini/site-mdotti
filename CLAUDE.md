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

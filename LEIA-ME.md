# Sistema de Atualização e Deploy — Site MDotti Tecnologia

Este repositório contém a pasta `wp-content` do site da MDotti Tecnologia.

## 📌 Estrutura do Repositório
*   **Raiz do repositório (`site-mdotti/`)** = Equivalente à pasta `wp-content/` da instalação do WordPress.
*   **Tema Ativo (`themes/mdotti/`)** = Contém todos os arquivos do tema (CSS/SCSS, JS, templates PHP, imagens de assets).

---

## 🚀 Como Aplicar Atualizações no Repositório (Git)

Como a raiz do repositório é a pasta `wp-content`, se você receber novos pacotes de atualização (arquivos `.zip`) que venham com a estrutura `wp-content/themes/...`, siga este fluxo para evitar pastas duplicadas:

```bash
cd /caminho/para/site-mdotti

# 1. Extraia o arquivo zip em um diretório temporário
unzip -o ~/Downloads/mdotti-update.zip -d temp-update/

# 2. Copie o conteúdo da pasta wp-content de forma que mescle com a estrutura do repositório
cp -r temp-update/wp-content/* .

# 3. Remova a pasta temporária
rm -rf temp-update/

# 4. Adicione as alterações e faça o commit
git add themes/mdotti/
git commit -m "feat(update): descrição das atualizações"
git push origin main
```

---

## 🛠️ Sistema de Deploy Automatizado (GitHub Actions)

A transferência de arquivos para os servidores da Hostgator é feita **100% automaticamente** através do GitHub Actions, eliminando o uso manual do FileZilla.

### 🌐 Fluxo 1 — Homologação (`homolog.mdotti.com`)
*   **Gatilho:** Qualquer alteração enviada (`git push`) para o branch **`main`** que afete a pasta do tema (`themes/mdotti/**`).
*   **Pasta de destino no servidor:** `wp-content/themes/mdotti/` (Relativo à raiz da conta FTP de homologação).

### 🔒 Fluxo 2 — Produção (`mdotti.com`)
*   **Gatilho:** Envio de uma tag de versão no Git (ex: `v1.0.1`, `v1.1.0`).
*   **Como disparar o deploy de produção:**
    ```bash
    git tag v1.0.1
    git push --tags
    ```
*   **Pasta de destino no servidor:** `wp-content/themes/mdotti/` (Relativo à raiz da conta FTP de produção).

### 🖱️ Execução Manual (Workflow Dispatch)
Se você precisar forçar um deploy sem alterar arquivos:
1. Acesse o repositório no GitHub.
2. Vá na aba **Actions**.
3. Selecione o workflow desejado (**Deploy para Homologação** ou **Deploy para Produção**).
4. Clique no botão **"Run workflow"** e selecione o branch `main`.

---

## 🔑 Configuração de Credenciais no GitHub (Secrets)

Para que o deploy funcione, certifique-se de que os seguintes segredos estão cadastrados em seu repositório no GitHub (**Settings** → **Secrets and variables** → **Actions**):

*   `FTP_SERVER`: Endereço do servidor FTP comum (Ex: `ftp.mdotti.com` ou o IP do servidor).
*   **Homologação:**
    *   `FTP_HOMOLOG_USERNAME`: Usuário da conta FTP de Homologação.
    *   `FTP_HOMOLOG_PASSWORD`: Senha da conta FTP de Homologação.
    *   `FTP_HOMOLOG_SERVER`: (Opcional) Servidor FTP de Homologação (se diferente de FTP_SERVER).
*   **Produção:**
    *   `FTP_PROD_USERNAME`: Usuário da conta FTP de Produção.
    *   `FTP_PROD_PASSWORD`: Senha da conta FTP de Produção.
    *   `FTP_PROD_SERVER`: (Opcional) Servidor FTP de Produção (se diferente de FTP_SERVER).

---

## 📝 Configuração Manual no WordPress (Após o Deploy)

### 1. Vincular Páginas aos Modelos (Templates) PHP (Uma única vez)
Se a página for nova (como a página **TPN** - slug `/tpn-trusted-partner-network`), associe-a ao seu template no painel de administração:
1.  Acesse o Painel do WordPress (`wp-admin`).
2.  Vá em **Páginas** → Clique na página correspondente.
3.  No painel lateral direito, acesse **Atributos da Página** → **Modelo**.
4.  Selecione o modelo correspondente (ex: **"TPN"** para a página TPN).
5.  Clique em **Atualizar**.

### 2. Limpeza de Cache
Após a conclusão do deploy:
*   Limpe o cache do seu navegador (`Ctrl + Shift + R` ou `Ctrl + F5`).
*   No painel do WordPress de Produção, acesse **Hide My WP** → **Tools** → **Flush Rewrites**.
*   Limpe o cache do plugin de cache ativo (ex: **W3 Total Cache**).

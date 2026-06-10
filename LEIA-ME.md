# Pacote de atualização — site-mdotti

Conteúdo deste ZIP:

```
.gitignore                                    ← novo, vai na raiz do repo
themes/
  mdotti/
    page-workstation.php                      ← SUBSTITUI o atual
    functions.php                             ← SUBSTITUI o atual (com snippet de enqueue)
    css/workstation.css                       ← NOVO
    js/workstation.js                         ← NOVO
    img/assets/workstation-tower.png          ← NOVO
    img/assets/rig-hero.jpg                   ← NOVO
    img/assets/rig-mdotti.jpg                 ← NOVO
    img/assets/rig-side.jpg                   ← NOVO
    img/assets/rig-detail-gpus.jpg            ← NOVO
    img/assets/rig-detail-cooler.jpg          ← NOVO
```

## Como aplicar (fluxo Git → FileZilla)

### 1. Aplicar no repositório local

```bash
# entra no seu clone do site-mdotti
cd /caminho/para/site-mdotti

# descompacta o ZIP por cima (preserva a estrutura de pastas)
# no macOS / Linux:
unzip -o ~/Downloads/site-mdotti-update.zip -d .

# no Windows: extraia com o Explorer e confirme "Substituir" nos arquivos repetidos
```

### 2. Conferir e comitar

```bash
git status                          # confira a lista de arquivos modificados
git add .gitignore themes/mdotti/
git commit -m "feat(workstation): nova página + seção Rig MDotti"
git push origin main
```

### 3. (Opcional, mas recomendado) limpar o que não deve estar no repo

O `.gitignore` novo já cobre `database.sql`, `cache/`, `wflogs/`, `w3tc-config/`,
`uploads/` etc. Pra remover do Git o que já está versionado por engano:

```bash
git rm -r --cached database.sql cache/ wflogs/ w3tc-config/ uploads/ advanced-cache.php
git commit -m "chore: remove arquivos que não pertencem ao repo"
git push
```

Os arquivos continuam existindo localmente e no servidor — só saem do controle de versão.

### 4. Deploy no servidor (FileZilla)

Conectado ao HostGator, painel direito em `public_html/wp-content/themes/mdotti/`,
arraste **apenas estes arquivos** do painel esquerdo:

- `page-workstation.php`
- `functions.php`
- `css/workstation.css`
- `js/workstation.js`
- 6 imagens em `img/assets/`

Confirme "Sobrescrever" quando perguntar.

### 5. Verificar

- Limpe cache do WordPress (plugin) + Cloudflare/CDN, se houver.
- `Ctrl+Shift+R` / `Cmd+Shift+R` no navegador.
- Abra a página de Workstation e confira: torre no hero, zigzag, carrossel do Rig
  com setas e dots, lightbox abre/fecha, grid de 6 serviços com hover.

### Rollback (se algo der errado)

```bash
git revert HEAD          # desfaz o último commit, gera um commit "anti-feature"
git push
```
Depois sobe pelo FileZilla os mesmos arquivos (agora na versão revertida).

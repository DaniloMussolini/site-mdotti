# Pacote de atualização — TPN (nova) + Home (seção Modelos) + Modelos + Workstation

Tudo neste ZIP espelha o caminho relativo a partir de `public_html/homolog/`
(e, depois, de `public_html/` em produção).

## Conteúdo

```
wp-content/themes/mdotti/
├── functions.php                       ← SUBSTITUI (enqueue de tpn.css, modelos.css e workstation.css)
├── page-tpn.php                        ← NOVO (página TPN — Trusted Partner Network)
├── css/tpn.css                         ← NOVO (estilos da página TPN)
├── page-home.php                       ← SUBSTITUI (seção "Modelos de Negócio" após Soluções)
├── page-modelos-de-negocio.php         ← SUBSTITUI (cards em painel-gráfico)
├── css/modelos.css                     ← SUBSTITUI
├── page-workstation.php                ← SUBSTITUI (correção dos vídeos)
└── css/workstation.css                 ← SUBSTITUI
```

> **Vídeos, ícones, logos e imagens de produto** (`video/*`, `img/icons/*`,
> `img/logos/*`, `img/assets/*`) **já existem** no servidor — não vão no ZIP de
> propósito, para não sobrescrever os originais. A página TPN usa a imagem
> `img/assets/asset-tpn-home-2.png` e os logos `img/logos/{sdvc,etc,unisom,iguale,centauro}.jpg`,
> todos já presentes no tema.

---

## O que mudou nesta rodada

1. **Página TPN (NOVA)** — `page-tpn.php` + `css/tpn.css`. Página didática:
   o que é o TPN, **os 4 níveis de Shield** (Blue · Silver · Gold · Gold Star),
   a **jornada até a conformidade** em 6 passos com o papel da MDotti, como a
   MDotti ajuda, padrões/parcerias e clientes.
   - Layouts fixados para produção: Shields em **escada** e Jornada em
     **zigue-zague**. As outras variações ficam no HTML, ocultas via CSS — para
     alternar, basta mover a classe `is-active` (sem necessidade de JS).
   - **Sem painel de Tweaks e sem JS próprio**: AOS e o menu já vêm do tema
     (footer.php). Os logos de clientes são uma faixa estática centralizada
     (classe `tpn-clients`), de propósito fora do Swiper global do `slides.js`.
2. **functions.php** — passa a carregar `css/tpn.css` no template `page-tpn.php`
   (além dos enqueues já existentes de Modelos e Workstation).

> As mudanças de Home/Modelos/Workstation das rodadas anteriores seguem incluídas
> neste mesmo pacote.

---

## Passo 1 — Aplicar no repositório Git

Como a raiz deste repositório (`site-mdotti/`) equivale à pasta `wp-content/` do WordPress, os novos pacotes de atualização que venham estruturados com a pasta `wp-content/` devem ser extraídos temporariamente e depois copiados para a raiz do repositório para evitar duplicações.

```bash
cd /caminho/para/site-mdotti

# 1. Extrair o arquivo zip em um diretório temporário
unzip -o ~/Downloads/mdotti-update.zip -d temp-update/

# 2. Copiar o conteúdo da pasta wp-content de forma que mescle com a estrutura do repositório
cp -r temp-update/wp-content/* .

# 3. Remover a pasta temporária
rm -rf temp-update/

# 4. Adicionar as atualizações e fazer o commit
git add themes/mdotti/
git commit -m "feat(tpn): nova página TPN (didática, 4 shields + jornada)"
git push origin main
```

## Passo 2 — Subir no HOMOLOG via FileZilla

Painel remoto: `/public_html/homolog/wp-content/themes/mdotti/`.
Arraste os arquivos atualizados de sua pasta local `themes/mdotti/` para a pasta correspondente no painel remoto:

- `functions.php`
- `page-tpn.php`
- `css/tpn.css`
- (e os demais arquivos do pacote, se ainda não enviados:
  `page-home.php`, `page-modelos-de-negocio.php`, `css/modelos.css`,
  `page-workstation.php`, `css/workstation.css`)

Confirme "Sobrescrever".

## Passo 3 — Apontar a página ao template (uma vez)

A página **TPN** (slug `tpn-trusted-partner-network`) deve usar o template "TPN":

1. wp-admin do homolog → **Páginas** → abra a página **TPN** (a que responde em
   `/tpn-trusted-partner-network`). Se ainda não existir, crie uma página com
   esse slug.
2. **Atributos da página** → **Modelo** → selecione **"TPN"**.
3. **Atualizar**.

> O link "Saiba mais" do bloco TPN na Home já aponta para
> `/tpn-trusted-partner-network`.

## Passo 4 — Verificar no homolog

- Limpe cache (se houver) + `Ctrl+Shift+R`.
- `https://homolog.mdotti.com/tpn-trusted-partner-network` → confira:
  hero, "O que é o TPN", os **4 níveis de Shield** (escada), a **jornada**
  (zigue-zague), "Como a MDotti ajuda", parcerias (TPN/MPA) e os **5 logos de
  clientes centralizados** (SDVC, ETC, Unisom, Iguale, Centauro).

## Passo 5 — Promover para PRODUÇÃO

Quando aprovado no homolog, repita o **Passo 2** com o painel remoto em
`public_html/wp-content/themes/mdotti/` e refaça o **Passo 3** em produção.

Depois, em produção: wp-admin → **Hide My WP → Tools → Flush Rewrites** e limpe
o cache do W3 Total Cache.

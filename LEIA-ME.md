# Pacote: Workstation → HOMOLOG

Sobe estes arquivos no servidor de homologação. Tudo dentro deste ZIP
espelha o caminho relativo a partir de `public_html/homolog/`.

## Conteúdo

```
wp-content/themes/mdotti/
├── page-workstation.php            ← SUBSTITUI
├── functions.php                   ← SUBSTITUI (snippet de enqueue da Workstation)
├── css/workstation.css             ← NOVO
├── js/workstation.js               ← NOVO
└── img/assets/
    ├── workstation-tower.png       ← NOVO
    ├── rig-hero.jpg                ← NOVO
    ├── rig-mdotti.jpg              ← NOVO
    ├── rig-side.jpg                ← NOVO
    ├── rig-detail-gpus.jpg         ← NOVO
    └── rig-detail-cooler.jpg       ← NOVO
```

## Deploy via FileZilla

1. Painel esquerdo (local): pasta deste ZIP descompactado.
2. Painel direito (remoto): `public_html/homolog/`
3. Arrasta a pasta `wp-content/` por cima. FileZilla preserva a estrutura e
   só sobrescreve os arquivos modificados. Confirma "Sobrescrever".

## Pós-upload (no homolog)

- Limpa cache do navegador (`Ctrl+Shift+R` / `Cmd+Shift+R`).
- Acessa `https://homolog.mdotti.com/workstation` em aba anônima.
- Confere: torre no hero, faixa de logos rodando, carrossel do Rig com setas
  e dots, grade de 6 serviços com ícones, formulário de contato.

## Pra promover depois pra produção

Mesmos arquivos, painel remoto em `public_html/wp-content/themes/mdotti/`.
Após subir em produção: wp-admin → Hide My WP → Tools → **Flush Rewrites**
(senão o plugin pode servir versões antigas dos assets reescritos).

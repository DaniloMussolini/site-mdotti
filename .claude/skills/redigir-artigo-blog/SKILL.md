---
name: redigir-artigo-blog
description: Cria um artigo otimizado para SEO no blog da MDotti (mdotti.com) a partir do material fornecido pelo usuário — seja a transcrição de um vídeo do YouTube, seja apenas inserts, tópicos, anotações ou ideias soltas. Use quando o usuário quiser um post, artigo ou texto para o blog. Atua como redator de marketing digital e SEO on-page. NÃO publica — entrega rascunho para aprovação humana.
---

# Redigir artigo de blog (MDotti)

Você atua como **redator especializado em marketing digital e SEO**, com foco em
textos otimizados para blogs corporativos. Sua tarefa é transformar o **material
de origem fornecido pelo usuário** em um **artigo para o blog do site da MDotti**
(mdotti.com): bem estruturado, informativo e voltado ao ranqueamento em motores
de busca.

O material de origem pode ser:
- a **transcrição completa de um vídeo** do YouTube; ou
- apenas **inserts, tópicos, anotações ou ideias soltas** dadas pelo usuário.

## 1. Carregar contexto

Caminhos relativos a este `SKILL.md`:

- `../../../../../CLAUDE.md` → identidade e termos da marca (MDotti).
- `../../../CLAUDE.md` → diretrizes do repositório `site-mdotti` (estrutura, deploy).
- `../../../blog/DIRETRIZES.md` → **diretrizes do blog** (tom, estrutura, SEO,
  regras de estilo obrigatórias). **Siga rigorosamente.**

Rascunhar e publicar acontecem **na mesma pasta**: depois de entregar o
rascunho, a publicação é feita pela skill `postar-blog` (REST API do
WordPress), sem trocar de sessão nem de diretório.

## 2. Reunir o material de origem (antes de redigir)

Identifique qual é o caso e proceda:

- **Se for uma transcrição de vídeo:** peça a **transcrição completa** antes de
  gerar o texto. Não redija a partir de transcrição parcial.
- **Se forem inserts/ideias/tópicos:** trabalhe com o que foi dado. Faça só as
  **perguntas essenciais** que faltarem (tema central, ângulo, público) e
  **infira** o resto com fidelidade à intenção. Não interrogue o usuário à toa.

Em qualquer caso, pergunte (se não informado, mas sem travar o trabalho):
- **Palavra-chave principal** desejada (se não houver, proponha uma a partir do tema).
- **Objetivo/CTA** do artigo (opcional).

## 3. Redigir o artigo

Estrutura e SEO on-page (detalhes em `blog/DIRETRIZES.md`):

- **Título (H1):** sempre criar um título adequado ao post, claro e com a
  palavra-chave principal.
- **Headings hierárquicos:** H2 e H3 com intertítulos objetivos.
- **Meta descrição sugerida:** 140–160 caracteres, com a palavra-chave.
- **Palavra-chave** aplicada no título, na introdução, em ao menos um H2 e na
  meta descrição, de forma natural (sem keyword stuffing).
- **Linguagem clara e natural**, com coesão e boa legibilidade.
- **Chamadas para ação (CTA)** quando apropriado.
- **Citações/snippets:** pode sugerir trechos para destacar como citação ou
  featured snippet.

## 4. Tom e estilo (obrigatório)

Reflete a identidade **profissional e acessível** da MDotti:

- **Técnico e educativo**, com um **leve toque de informalidade** para manter o
  conteúdo envolvente e próximo do leitor.
- Evitar jargões excessivos; ao introduzir um termo técnico, **explicá-lo**.
- **Sem travessões nem dashes** de pontuação (`—`, `–`, `-` como aposto) e
  **sem emojis** no conteúdo. Hífens corretos do português são permitidos.
- **ZBoox** é a grafia exata do servidor/NAS (sempre assim, com essa caixa).

## 5. Fidelidade e inferência

- Quando o material for **ambíguo, incompleto ou impreciso** (transcrição ou
  ideias), você pode **inferir** para completar o raciocínio, desde que mantenha
  **fidelidade ao tema e à intenção** do material. Não invente fatos, números ou
  casos de cliente; marque `[CONFIRMAR: ...]` quando precisar de um dado ausente.

## 6. Checar os fatos (obrigatório quando houver dado externo)

Antes de entregar o rascunho, aplique a skill **`fact-checker`** (global, em
`~/.claude/skills/fact-checker/`) sempre que o texto citar:

- número, percentual, valor financeiro ou data;
- resultado, ranking ou comparação entre empresas;
- declaração atribuída a uma pessoa ou empresa;
- especificação técnica de produto de terceiro.

Não precisa rodar em artigo puramente conceitual, que só explica um conceito sem
apoiar-se em dado externo.

Regras:

- **Cheque antes de entregar, não depois.** O Danilo revisa o texto já conferido.
- **Corrija o texto**, não só aponte o erro. Erro comum: atribuir uma declaração
  à pessoa errada da empresa.
- **Dado que não se sustenta sai do artigo.** Não publique número que uma fonte
  autoritativa não confirme; se for essencial ao argumento, marque
  `[CONFIRMAR: ...]` e avise que o artigo não está publicável assim.
- **Registre o rastro** no bloco "NÃO COLAR" do topo do HTML, neste formato já
  usado nos rascunhos existentes:

```
Números da <fonte/assunto>: verificados via fact-checker em DD/MM/AAAA. Fontes:
- <Publicação>: <URL>
- <Publicação>: <URL>
Confirmado: <lista curta do que bateu com as fontes>
Correção aplicada: <o que estava errado no rascunho e virou o quê>
```

Cite no corpo do artigo, com link, ao menos uma fonte oficial dos números
principais, conforme `blog/DIRETRIZES.md`.

## 7. Entregar o rascunho

Formato de saída na conversa:

```
# [Título do post]

Meta descrição sugerida: [140–160 caracteres]
Palavra-chave principal: [...]
Slug sugerido: [...]

[corpo do artigo com H3]

[CONFIRMAR: ...] (se houver)
```

Além de mostrar o rascunho na conversa, **salve-o em um arquivo HTML standalone**
em `../../../blog/rascunhos/<slug>.html` (o nome do arquivo é o próprio slug, sem
prefixo de canal: a pasta já é exclusiva do blog). Artigos já publicados vão
para `blog/rascunhos/postados/`, movidos pela skill `postar-blog`.

### Estrutura do arquivo HTML

O arquivo é uma página HTML completa que serve como **prévia visual** do artigo
e como **fonte do conteúdo a colar no WordPress**. Estrutura obrigatória:

```html
<!-- bloco de metadados NÃO COLAR ... -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="[meta descrição]">
  <title>[Título] — MDotti</title>
  <!-- Google Fonts: Rubik + Host Grotesk -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:wght@400;600&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
  <style>
    /* apenas tipografia do conteúdo — sem layout de página */
    html { font-size: 62.5%; }
    body { font-family: "Rubik", sans-serif; background: #fff; padding: 4rem; max-width: 72.8rem; margin: 0 auto; }
    h1 { color: #1f1c30; font-family: "Host Grotesk", sans-serif; font-size: 4rem; font-weight: 400; line-height: 130%; margin-bottom: 3.2rem; }
    h3 { color: #1f1c30; font-family: "Rubik", sans-serif; font-size: 2.4rem; font-weight: 400; line-height: 130%; margin: 3.2rem 0; }
    p { color: #8a9d98; font-size: 1.8rem; font-weight: 400; line-height: 150%; text-align: left; }
    p:not(:last-child) { margin-bottom: 3.2rem; }
    p strong, p b, p a { color: #735ee0; font-family: inherit; font-size: inherit; }
    p code { background: #f8f9fd; color: #735ee0; padding: .2rem .6rem; border-radius: .4rem; font-size: 1.6rem; font-family: monospace; }
    ul, ol { padding-left: 1.8rem; margin: 3.2rem 0; }
    ul li, ol li { color: #8a9d98; font-size: 1.6rem; font-weight: 400; line-height: 150%; list-style: disc; }
    ul li:not(:last-child), ol li:not(:last-child) { margin-bottom: 1.6rem; }
    ul li strong, ul li b, ul li a, ol li strong, ol li b, ol li a { color: #735ee0; }
    ol li { list-style: decimal; }
  </style>
</head>
<body>

<!-- bloco visível de prévia da meta descrição -->
<div style="background:#f8f9fd;border-left:3px solid #735ee0;padding:1.2rem 1.6rem;margin-bottom:3.2rem;font-size:1.4rem;color:#8a9d98;font-family:'Rubik',sans-serif;line-height:150%;">
  <strong style="color:#735ee0;font-size:inherit;">Meta descrição (campo SEO):</strong><br>
  [meta descrição]
</div>

<!-- INÍCIO DO CONTEÚDO — colar no editor do WordPress -->
<h1>[Título do post]</h1>

<div class="content">
  [corpo do artigo: parágrafos, H3, listas]
</div>
<!-- FIM DO CONTEÚDO -->

</body>
</html>
```

**Regras do arquivo:**
- O `<style>` contém **apenas tipografia** — sem layout de página, sem section/aside/container.
- O conteúdo a colar no WordPress é tudo entre os comentários `INÍCIO` e `FIM`,
  incluindo o H1 e o `<div class="content">`.
- O tema WordPress usa H3 (não H2) para as seções do corpo do artigo.
- **Antes de cada `<h3>` no corpo, inserir `<p>&nbsp;</p>`** para criar espaço
  visual extra entre seções. Motivo: o tema WordPress não aplica `margin-top`
  suficiente nos H3, e estilos do nosso `<style>` da prévia não viajam com o
  paste. Um parágrafo vazio com `&nbsp;` sobrevive ao limpador do Gutenberg
  como bloco "Parágrafo" vazio e adiciona a altura de uma linha. Para mais
  espaço, repetir o `<p>&nbsp;</p>`.
- **Toda tabela vai dentro de `<div class="table-wrap">`**, assim:

  ```html
  <div class="table-wrap">
  <table>
    <thead><tr><th></th><th>Coluna A</th><th>Coluna B</th></tr></thead>
    <tbody>
      <tr><td><strong>Rótulo</strong></td><td>...</td><td>...</td></tr>
    </tbody>
  </table>
  </div>
  ```

  O tema estiliza `.content table` (borda, zebra de linhas, cabeçalho roxo) e
  usa o `.table-wrap` como container de rolagem horizontal no mobile. Sem o
  wrapper a tabela ainda rola, mas com o layout um pouco pior. Primeira coluna
  é o rótulo da linha, em `<strong>`, e ocupa 20% da largura. Nada de `style`
  inline: o estilo vive no tema (`scss/_blog.scss`).
- O bloco de metadados no comentário HTML do topo é marcado como "NÃO COLAR"
  e contém: título, meta descrição, palavra-chave, slug, categoria, data,
  instruções de publicação, pendências `[CONFIRMAR]` e o **rastro da checagem
  de fatos** (etapa 6: data, fontes, confirmados, correções).
- O bloco visual de meta descrição (div estilizado) é para prévia — não vai ao WordPress.

Após entregar, ofereça ajustes (tamanho, foco da palavra-chave, CTA).

## Guardrails

- **Nunca publicar** — esta skill só rascunha; publicar é ação humana.
- **Nunca inventar** dados; usar `[CONFIRMAR]`.
- **Nunca entregar rascunho com dado externo não checado** (etapa 6). O tom da
  MDotti é técnico e preciso: número errado num post indexado custa mais caro
  que atraso na entrega.
- Respeitar todas as regras de estilo de `blog/DIRETRIZES.md`.

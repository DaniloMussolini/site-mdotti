<?php
/**
 * Template Name: Modelos de Negócio
 *
 * Página de Modelos de Negócio reformulada.
 *
 * Inclui:
 *   - Hero (faixa clara no topo p/ o logo, fundo escuro abaixo)
 *   - Números
 *   - Os 3 modelos (Venda · Leasing em destaque · Locação)
 *   - Por que o Leasing? (4 benefícios)
 *   - Clientes + CTA final + Contato (includes do tema)
 *
 * Dependências (registradas em functions.php):
 *   - css/modelos.css
 *
 * Imagens dos modelos (já na biblioteca de mídia): /uploads/2025/05/
 *   modelos-venda.jpg, modelos-aluguel.jpg, modelos-leasing.jpg
 */
?>

<?php get_header(); ?>

<?php
// URLs das imagens dos modelos. Por padrão usa os uploads existentes.
// Se você cadastrar campos ACF (imagem_venda / imagem_locacao / imagem_leasing),
// eles têm prioridade — facilita trocar as fotos pelo wp-admin no futuro.
$uploads   = wp_upload_dir();
$base_url  = $uploads['baseurl'];
$img_venda   = get_field('imagem_venda')   ?: $base_url . '/2025/05/modelos-venda.jpg';
$img_locacao = get_field('imagem_locacao') ?: $base_url . '/2025/05/modelos-aluguel.jpg';
$img_leasing = get_field('imagem_leasing') ?: $base_url . '/2025/05/modelos-leasing.jpg';
?>

<!-- ============ HERO ============ -->
<section class="s-models-hero">
  <div class="mh-bg" aria-hidden="true"></div>
  <div class="mh-inner">
    <div class="mh-eyebrow"><span class="dot"></span>Modelos de Negócio</div>
    <h1>Flexibilidade para <em>viabilizar</em> o seu projeto</h1>
    <p>Venda, locação ou locação com opção de compra. Você escolhe como investir em tecnologia sem abrir mão de performance, segurança e suporte técnico especializado.</p>
    <div class="mh-cta">
      <a href="#modelos" class="btn-primary purple">Conheça os modelos</a>
      <a href="https://api.whatsapp.com/send/?phone=%2B5511988665683" target="_blank" rel="noopener" class="mh-link">Falar com especialista <span>&rarr;</span></a>
    </div>
  </div>
</section>

<!-- ============ NÚMEROS ============ -->
<section class="s-models-numbers">
  <div class="mn-inner">
    <div class="mn-item">
      <strong>500</strong>
      <span>Equipamentos já locados</span>
    </div>
    <div class="mn-item">
      <strong>+50</strong>
      <span>Contratos ativos de locação ou leasing</span>
    </div>
    <div class="mn-item">
      <strong>0%</strong>
      <span>Investimento inicial</span>
    </div>
    <div class="mn-item">
      <strong>+60%</strong>
      <span>Clientes optam por locação com opção de compra</span>
    </div>
  </div>
</section>

<!-- ============ OS 3 MODELOS ============ -->
<section class="s-models" id="modelos">
  <div class="sm-inner">
    <div class="sm-header">
      <div class="sm-eyebrow"><span class="dot"></span>Escolha como investir</div>
      <h2>Três formas de ter a <em>melhor tecnologia</em></h2>
      <p>Independentemente do tamanho ou da duração do projeto, há um modelo que se adequa ao seu momento financeiro e operacional.</p>
    </div>

    <div class="sm-grid">

      <!-- VENDA -->
      <article class="sm-card" data-model="venda">
        <div class="sm-photo">
          <img src="<?php echo esc_url( $img_venda ); ?>" alt="Venda de equipamentos MDotti">
        </div>
        <div class="sm-body">
          <div class="sm-label"><span class="dot"></span>Venda</div>
          <h3>Estrutura <em>própria</em></h3>
          <p>Para quem busca investir em estrutura própria, com total liberdade de configuração e o equipamento no seu patrimônio.</p>
          <ul class="sm-list">
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Liberdade total de configuração</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Até 3 anos de garantia</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Suporte técnico e customização</span></li>
          </ul>
          <div class="sm-cta">
            <a href="#contato" class="btn-alt">Quero comprar</a>
          </div>
        </div>
      </article>

      <!-- LEASING (DESTAQUE) -->
      <article class="sm-card is-featured" data-model="leasing">
        <div class="sm-flag"><span class="spark">&#9733;</span> Mais escolhido</div>
        <div class="sm-photo">
          <img src="<?php echo esc_url( $img_leasing ); ?>" alt="Leasing &mdash; locação com opção de compra MDotti">
        </div>
        <div class="sm-body">
          <div class="sm-label"><span class="dot"></span>Locação com Opção de Compra</div>
          <h3>Leasing <em>estratégico</em></h3>
          <p>Nosso modelo mais estratégico. Opere com os equipamentos ideais desde o início, sem descapitalizar sua empresa &mdash; e decida no fim do contrato.</p>
          <ul class="sm-list">
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Equipamentos ideais desde o início</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Suporte com troca de peças inclusa</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Sem descapitalizar a empresa</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Opção de compra ao final do contrato</span></li>
          </ul>
          <div class="sm-cta">
            <a href="#contato" class="btn-primary purple">Quero fazer leasing</a>
          </div>
        </div>
      </article>

      <!-- LOCAÇÃO -->
      <article class="sm-card" data-model="locacao">
        <div class="sm-photo">
          <img src="<?php echo esc_url( $img_locacao ); ?>" alt="Locação de equipamentos MDotti">
        </div>
        <div class="sm-body">
          <div class="sm-label"><span class="dot"></span>Locação</div>
          <h3>Flexível e <em>pontual</em></h3>
          <p>Ideal para projetos temporários ou expansões pontuais. Equipamentos prontos para uso, sem necessidade de investimento inicial.</p>
          <ul class="sm-list">
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Ideal para projetos temporários</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Equipamentos prontos para uso</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Sem investimento inicial</span></li>
          </ul>
          <div class="sm-cta">
            <a href="#contato" class="btn-alt">Quero alugar</a>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ============ POR QUE LEASING ============ -->
<section class="s-leasing-why" id="leasing">
  <div class="lw-inner">
    <div class="lw-head">
      <div class="lw-eyebrow"><span class="dot"></span>Por que o Leasing?</div>
      <h2>Alta performance hoje, <em>sem comprometer</em> o caixa</h2>
      <p>O leasing combina o melhor da locação e da compra: você usa os equipamentos ideais desde o primeiro dia e, ao final do contrato, decide o que fazer.</p>
    </div>
    <div class="lw-grid">
      <div class="lw-item">
        <div class="lw-ico">
          <svg viewBox="0 0 24 24" fill="none"><path d="M3 17l5-5 4 4 8-8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 8h5v5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h4>Previsibilidade financeira</h4>
        <p>Parcelas fixas e planejadas. Você sabe exatamente quanto vai investir, sem surpresas no orçamento.</p>
      </div>
      <div class="lw-item">
        <div class="lw-ico">
          <svg viewBox="0 0 24 24" fill="none"><path d="M12 3v18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M16 7.5C16 5.6 14.2 4 12 4S8 5.6 8 7.5 9.8 11 12 11s4 1.6 4 3.5S14.2 18 12 18s-4-1.6-4-3.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h4>Sem descapitalizar</h4>
        <p>Mantenha seu caixa livre para o que realmente faz seu negócio crescer, sem imobilizar capital.</p>
      </div>
      <div class="lw-item">
        <div class="lw-ico">
          <svg viewBox="0 0 24 24" fill="none"><path d="M12 3l7 3v5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h4>Suporte total incluso</h4>
        <p>Substituição de peças em caso de falha sem custo extra. Sua operação nunca para.</p>
      </div>
      <div class="lw-item">
        <div class="lw-ico">
          <svg viewBox="0 0 24 24" fill="none"><path d="M4 7h16M4 12h16M4 17h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="18" cy="17" r="3" stroke="currentColor" stroke-width="1.8"/></svg>
        </div>
        <h4>Flexibilidade no fim</h4>
        <p>Ao final, compre os equipamentos com condições acessíveis ou atualize sua infraestrutura.</p>
      </div>
    </div>
    <div class="lw-cta">
      <a href="#contato" class="btn-primary">Simular um leasing</a>
    </div>
  </div>
</section>

<?php include(TEMPLATEPATH .'/includes/clientes.php')?>

<!-- ============ CTA FINAL ============ -->
<section class="s-end">
  <main class="container-full">
    <video src="<?php echo get_template_directory_uri(); ?>/video/bg-mdotti-hero.mp4" autoplay loop playsinline muted></video>
    <div class="container">
      <div class="text" data-aos="zoom-in">
        <h5><?php the_title(); ?></h5>
        <h2>Alta performance começa com a escolha certa!</h2>
        <div class="cta">
          <a href="#contato" class="btn-primary purple">Entre em contato</a>
        </div>
      </div>
    </div>
  </main>
</section>

<?php include(TEMPLATEPATH .'/includes/contato.php')?>

<?php get_footer(); ?>

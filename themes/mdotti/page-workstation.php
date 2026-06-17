<?php
/**
 * Template Name: Workstation
 *
 * Página de Workstation + Rig MDotti.
 *
 * Inclui:
 *   - Hero principal
 *   - Faixa de logos de softwares compatíveis
 *   - Modelos (Workstation tradicional + Rig MDotti em zigzag)
 *   - Serviços & Recursos (grade de ícones)
 *   - CTA final + Contato
 *
 * Dependências (registradas em functions.php — ver functions-snippet.php):
 *   - css/workstation.css
 *   - js/workstation.js
 *
 * Imagens novas em /img/assets/:
 *   workstation-tower.png
 *   rig-hero.jpg, rig-mdotti.jpg, rig-side.jpg
 *   rig-detail-gpus.jpg, rig-detail-cooler.jpg
 *
 * @package mdotti
 */

get_header();
?>

<!-- HERO -->
<section class="s-hero-product">
  <div class="container">
    <div class="text">
      <h5>Workstation</h5>
      <h1>Performance sob medida para criação audiovisual</h1>
      <div class="cta">
        <a href="#contato" class="btn-primary purple">Faça seu pedido</a>
      </div>
    </div>
    <div class="asset">
      <img src="<?php echo get_template_directory_uri(); ?>/img/assets/workstation-tower.png" alt="Workstation MDotti">
    </div>
  </div>
</section>

<!-- LOGOS DE SOFTWARES COMPATÍVEIS -->
<section class="s-clients s-clients-workstation">
  <main class="container-full">
    <div class="container">
      <div class="swiper slide-logos">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><div class="box"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/avid.jpg" alt="Avid"></div></div>
          <div class="swiper-slide"><div class="box"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/davinci.jpg" alt="DaVinci Resolve"></div></div>
          <div class="swiper-slide"><div class="box"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/premiere.jpg" alt="Adobe Premiere"></div></div>
          <div class="swiper-slide"><div class="box"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/blender.jpg" alt="Blender"></div></div>
          <div class="swiper-slide"><div class="box"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/autodesk.jpg" alt="Autodesk"></div></div>
          <div class="swiper-slide"><div class="box"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/3ds.jpg" alt="3ds Max"></div></div>
          <div class="swiper-slide"><div class="box"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/nuke.jpg" alt="Nuke"></div></div>
          <div class="swiper-slide"><div class="box"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/houdini.jpg" alt="Houdini"></div></div>
        </div>
      </div>
    </div>
  </main>
</section>

<!-- MODELOS: WORKSTATION + RIG -->
<section class="s-rig" id="modelos">
  <div class="rig-variant variant-2 is-active" data-variant="2">
    <div class="v2-container">

      <div class="v2-header">
        <div class="rig-eyebrow" style="justify-content:center; display:inline-flex;"><span class="dot"></span>Linha completa</div>
        <h2>Duas plataformas, <em>uma só engenharia.</em></h2>
        <p>Da workstation sob medida ao Rig de processamento extremo — escolha o que se adapta ao seu workflow.</p>
      </div>

      <!-- Workstation (photo left) -->
      <div class="v2-row ws">
        <div class="photo-wrap">
          <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/workstation-tower.png" alt="Workstation MDotti"></div>
          <div class="badge">Workstation</div>
        </div>
        <div class="content">
          <div class="rig-eyebrow"><span class="dot"></span>Workstation MDotti</div>
          <h3>Performance <em>sob medida</em> para criação audiovisual</h3>
          <p>Cada workstation é montada para o software, o tipo de projeto e o orçamento do cliente, garantindo o melhor custo-benefício para edição, correção de cor, VFX, 3D e LAB.</p>
          <ul class="check-list">
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Configuração personalizada por workflow</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Componentes premium e armazenamento NVMe</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Certificada para os principais softwares profissionais</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>2 anos de garantia, locação e leasing disponíveis</span></li>
          </ul>
          <a href="#contato" class="btn-primary purple">Configure sua Workstation</a>
        </div>
      </div>

      <!-- Rig (photo right — mirrored) -->
      <div class="v2-row rig reverse">
        <div class="photo-wrap">
          <div class="rig-carousel ratio-43" data-carousel>
            <div class="track">
              <div class="slide is-active"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/rig-side.jpg" alt="Rig MDotti — vista lateral"><div class="cap">Vista lateral</div></div>
              <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/rig-hero.jpg" alt="Rig MDotti — vista frontal"><div class="cap">Vista frontal</div></div>
              <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/rig-mdotti.jpg" alt="Rig MDotti — chassi aberto"><div class="cap">Chassi aberto</div></div>
              <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/rig-detail-gpus.jpg" alt="Rig MDotti — múltiplas GPUs"><div class="cap">Múltiplas GPUs</div></div>
              <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/rig-detail-cooler.jpg" alt="Rig MDotti — refrigeração"><div class="cap">Refrigeração</div></div>
            </div>
            <button class="arrow prev" aria-label="Anterior"><svg viewBox="0 0 16 16" fill="none"><path d="M10 3L5 8L10 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
            <button class="arrow next" aria-label="Próxima"><svg viewBox="0 0 16 16" fill="none"><path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
            <div class="dots"><button class="dot is-active" data-i="0"></button><button class="dot" data-i="1"></button><button class="dot" data-i="2"></button><button class="dot" data-i="3"></button><button class="dot" data-i="4"></button></div>
          </div>
        </div>
        <div class="content">
          <div class="rig-eyebrow is-rig"><span class="dot"></span>Rig MDotti · Novo</div>
          <h3>Potência <em>extrema</em> para VFX, IA e simulações</h3>
          <p>Workstation de <strong>arquitetura aberta</strong>, projetada para workloads intensivos que exigem alta densidade de GPUs, excelente refrigeração e estabilidade elétrica. Mais do que uma workstation tradicional, é uma plataforma de processamento de alto desempenho preparada para cargas extremas e operação contínua.</p>
          <ul class="check-list">
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><strong>Múltiplas GPUs em paralelo</strong> — render, IA, machine learning</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><strong>Refrigeração otimizada</strong> — chassi aberto sem thermal throttling</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><strong>Duas fontes de alimentação</strong> — carga balanceada e estabilidade</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><strong>Manutenção facilitada</strong> — acesso direto aos componentes</span></li>
            <li><span class="ico"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.5 9L10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><strong>Performance contínua</strong> — render, simulação e IA por longos períodos</span></li>
          </ul>
          <div class="rig-apps-tags">
            <span class="label">Aplicações</span>
            <span class="tag">Correção de cor</span>
            <span class="tag">Render 3D</span>
            <span class="tag">VFX</span>
            <span class="tag">IA &amp; LLMs</span>
            <span class="tag">Render distribuído</span>
            <span class="tag">Unreal &amp; Virtual Production</span>
            <span class="tag">Simulações</span>
            <span class="tag">Pesquisa</span>
          </div>
          <a href="#contato" class="btn-primary purple">Configure seu Rig</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SERVIÇOS & RECURSOS -->
<section class="s-services" id="servicos">
  <div class="svc-variant svc-v1 is-active" data-svc-variant="1">
    <div class="svc-header">
      <div class="eyebrow"><span class="dot"></span>Serviços &amp; Recursos</div>
      <div class="title-row">
        <h2>Tudo que você precisa <em>para operar com confiança.</em></h2>
        <p>Da escolha dos componentes ao suporte técnico no dia a dia, a MDotti acompanha o ciclo de vida completo da sua workstation ou Rig — com modelos de aquisição flexíveis e garantia estendida.</p>
      </div>
    </div>
    <div class="grid">
      <div class="item">
        <span class="num">01</span>
        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-chip.svg" alt=""></div>
        <h3>Configuração sob medida</h3>
        <p>Cada workstation ou Rig é montado para o software, o tipo de projeto e o orçamento — sempre buscando o melhor custo-benefício para o seu workflow.</p>
      </div>
      <div class="item">
        <span class="num">02</span>
        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-garantia.svg" alt=""></div>
        <h3>2 anos de garantia</h3>
        <p>Cobertura completa com serviço on-site e reposição de peças Next Business Day, mantendo sua operação sempre ativa.</p>
      </div>
      <div class="item">
        <span class="num">03</span>
        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-hdd.svg" alt=""></div>
        <h3>Componentes premium</h3>
        <p>Processadores de alto desempenho, GPUs profissionais e armazenamento NVMe ultrarrápido, selecionados para máxima eficiência.</p>
      </div>
      <div class="item">
        <span class="num">04</span>
        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-locacao.svg" alt=""></div>
        <h3>Locação &amp; leasing</h3>
        <p>Acesso à tecnologia de ponta sem grande investimento inicial — com opção de compra ao final do contrato.</p>
      </div>
      <div class="item">
        <span class="num">05</span>
        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-support.svg" alt=""></div>
        <h3>Suporte especializado</h3>
        <p>A MDotti acompanha todo o ciclo de vida da sua máquina — atualizações, suporte técnico e otimizações sempre que necessário.</p>
      </div>
      <div class="item">
        <span class="num">06</span>
        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-consulting.svg" alt=""></div>
        <h3>Compatibilidade total</h3>
        <p>Configurações certificadas e testadas para os principais softwares: Avid, DaVinci Resolve, Premiere, Blender, Autodesk e mais.</p>
      </div>
    </div>
  </div>
</section>

<!-- END CTA -->
<section class="s-end">
  <main class="container-full">
    <video src="<?php echo get_template_directory_uri(); ?>/video/bg-mdotti-hero.mp4" autoplay loop playsinline muted></video>
    <div class="container">
      <div class="text">
        <h5>Workstation</h5>
        <h2>Alta performance começa com a escolha certa!</h2>
        <div class="cta">
          <a href="#contato" class="btn-primary purple">Faça seu pedido</a>
        </div>
      </div>
    </div>
  </main>
</section>

<!-- CONTATO -->
<section class="s-contact" id="contato">
  <div class="container">
    <div class="top">
      <div class="title">
        <h2>Vamos conversar?</h2>
        <p>Contamos com especialistas que te ajudam a encontrar a melhor solução para o seu negócio. Entre em contato e fale com a gente!</p>
      </div>
    </div>
    <main>
      <form class="form-mdotti" onsubmit="event.preventDefault()">
        <div class="input">
          <div class="group"><label for="nome">Nome</label><input type="text" id="nome" placeholder="Digite seu nome completo" required></div>
          <div class="group"><label for="email">E-mail</label><input type="email" id="email" placeholder="Digite seu melhor e-mail" required></div>
          <div class="group"><label for="tel">Telefone</label><input type="tel" id="tel" placeholder="(00) 00000-0000" required></div>
          <div class="group"><label for="empresa">Empresa</label><input type="text" id="empresa" placeholder="Digite o nome da sua empresa" required></div>
          <div class="group"><label for="mensagem">Mensagem</label><input type="text" placeholder="Digite sua mensagem..." id="mensagem" required></div>
        </div>
        <div class="cta">
          <button type="submit" class="btn-primary purple">Entre em contato</button>
        </div>
      </form>

      <div class="bn-video">
        <video src="<?php echo get_template_directory_uri(); ?>/video/bn-video-mdotti.mp4" autoplay loop playsinline muted></video>
        <div class="caption">
          <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-youtube.svg" alt="Youtube"></div>
          <h2>Acompanhe nosso conteúdo no <span>Youtube</span>!</h2>
          <div class="cta">
            <a target="_blank" href="https://www.youtube.com/c/MDottiTecnologia" class="btn-primary purple">Acessar canal do Youtube</a>
          </div>
        </div>
      </div>
    </main>
  </div>
</section>

<?php get_footer(); ?>

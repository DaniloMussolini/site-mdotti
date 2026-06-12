<?php
/**
 * Template Name: TPN
 *
 * Página TPN — Trusted Partner Network.
 * Conteúdo didático: o que é o TPN, os 4 níveis de Shield, a jornada até a
 * conformidade e o papel da MDotti.
 *
 * Layouts escolhidos (variações de Tweaks fixadas para produção):
 *   - Níveis de Shield  → "escada de progressão" (shv-2)
 *   - Jornada           → "zigue-zague" (jv-2)
 * As demais variações permanecem no HTML, ocultas via CSS (basta trocar a
 * classe is-active para alternar, sem JS).
 *
 * Dependências (registradas em functions.php):
 *   - css/tpn.css
 * Imagens reais já existentes no servidor:
 *   - img/assets/asset-tpn-home-2.png
 *   - img/logos/sdvc.jpg, etc.jpg, unisom.jpg, iguale.jpg, centauro.jpg
 *
 * @package mdotti
 */

get_header();
?>

<!-- HERO -->
<section class="s-hero-product s-hero-tpn" data-screen-label="TPN — Hero">
  <div class="container">
    <div class="text" style="height: 500px">
      <h5>Trusted Partner Network (TPN)</h5>
      <h1>Segurança de conteúdo no padrão dos grandes estúdios</h1>
      <p class="lead">O TPN é o reconhecimento que comprova que sua operação protege conteúdo audiovisual segundo as melhores práticas da indústria. A MDotti prepara sua infraestrutura para conquistá-lo — do diagnóstico ao selo.</p>
      <div class="cta">
        <a href="#contato" class="btn-primary purple" style="gap: 0px; line-height: 1">Falar com especialista</a>
      </div>
      <div class="badge-row">
        <span class="b"><svg viewBox="0 0 24 24" fill="none"><path d="M12 3l7 2.5v5C19 16 15.9 19.5 12 21 8.1 19.5 5 16 5 10.5v-5L12 3z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg>Criado pela MPA</span>
        <span class="b"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M3 12h18M12 3c2.5 2.5 3.5 6 3.5 9s-1 6.5-3.5 9c-2.5-2.5-3.5-6-3.5-9S9.5 5.5 12 3z" stroke="currentColor" stroke-width="1.7"/></svg>60+ países</span>
        <span class="b"><svg viewBox="0 0 24 24" fill="none"><path d="M4 9.5l8-5 8 5-8 5-8-5z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M7 11.5V16c0 1 2.2 2.5 5 2.5s5-1.5 5-2.5v-4.5" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg>Exigido por grandes estúdios</span>
      </div>
    </div>
    <div class="asset">
      <img src="<?php echo get_template_directory_uri(); ?>/img/assets/asset-tpn-home-2.png" alt="TPN — Trusted Partner Network">
    </div>
  </div>
</section>

<!-- O QUE É TPN -->
<section class="s-tpn-about" id="o-que-e" data-screen-label="TPN — O que é">
  <div class="wrap">
    <div class="cols">
      <div class="lead-col" data-aos="fade-up">
        <div class="tpn-eyebrow"><span class="dot"></span>O que é</div>
        <div class="tpn-shead"><h2>Afinal, o que é o <em>TPN</em>?</h2></div>
        <p>A Trusted Partner Network (TPN) é a iniciativa global de segurança de conteúdo do mercado de cinema e TV. Ele é mantido pela Motion Picture Association (MPA) — a associação por trás dos maiores estúdios do mundo, como Disney, Netflix, Warner, Universal, Sony, Paramount e Amazon.</p>
        <p>Na prática, é um conjunto de boas práticas e avaliações que comprovam que uma empresa — produtora, pós-produção, estúdio ou fornecedor — protege adequadamente o conteúdo audiovisual que passa por ela <strong>antes do lançamento</strong>.</p>
        <p>Cada vez mais, os grandes estúdios <strong>exigem que seus parceiros sejam avaliados pela TPN</strong> antes de confiar a eles materiais sensíveis. Ter esse reconhecimento abre portas — e a MDotti ajuda sua empresa a chegar lá.</p>
      </div>
      <div class="tpn-facts" data-aos="fade-up" data-aos-delay="100">
        <div class="fact">
          <div class="ic"><svg viewBox="0 0 24 24" fill="none"><path d="M12 3l7 2.5v5C19 16 15.9 19.5 12 21 8.1 19.5 5 16 5 10.5v-5L12 3z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M9 12l2 2 4-4.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <h4>Mantido pela MPA</h4>
          <p>Iniciativa oficial da Motion Picture Association, dona e gestora do programa.</p>
        </div>
        <div class="fact">
          <div class="ic"><svg viewBox="0 0 24 24" fill="none"><path d="M6 3h9l5 5v13a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M14 3v5h5M8.5 13l2 2 4-4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <h4>Baseado em boas práticas</h4>
          <p>Segue a MPA Content Security Best Practices, a referência da indústria.</p>
        </div>
        <div class="fact">
          <div class="ic"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M3 12h18M12 3c2.5 2.5 3.5 6 3.5 9s-1 6.5-3.5 9c-2.5-2.5-3.5-6-3.5-9S9.5 5.5 12 3z" stroke="currentColor" stroke-width="1.7"/></svg></div>
          <h4>Reconhecido globalmente</h4>
          <p>Comunidade com membros em mais de 60 países ao redor do mundo.</p>
        </div>
        <div class="fact">
          <div class="ic"><svg viewBox="0 0 24 24" fill="none"><path d="M4 9.5l8-5 8 5-8 5-8-5z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M7 11.5V16c0 1 2.2 2.5 5 2.5s5-1.5 5-2.5v-4.5" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg></div>
          <h4>Exigido por estúdios</h4>
          <p>Pré-requisito para trabalhar com grandes produções de cinema e TV.</p>
        </div>
      </div>
    </div>

    <div class="tpn-why">
      <div class="tpn-shead" data-aos="fade-up"><h2 style="font-size:clamp(2.6rem,3vw,3.4rem)">Por que isso importa para o seu negócio</h2></div>
      <div class="row">
        <div class="why-card" data-aos="fade-up">
          <span class="num">01</span>
          <h4>Abre portas comerciais</h4>
          <p>Conteúdo de alto valor só é confiado a parceiros que comprovam segurança. O reconhecimento TPN é o seu passaporte para novos contratos.</p>
        </div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="100">
          <span class="num">02</span>
          <h4>Padroniza e economiza</h4>
          <p>Uma única avaliação é reconhecida por vários estúdios. Menos auditorias repetidas, menos retrabalho e mais agilidade.</p>
        </div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="200">
          <span class="num">03</span>
          <h4>Reduz riscos reais</h4>
          <p>Vazamentos antes do lançamento geram prejuízo e quebra de confiança. As boas práticas fecham as brechas de segurança.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OS 4 NÍVEIS DE SHIELD -->
<section class="s-shields" id="shields" data-screen-label="TPN — Níveis de Shield">
  <div class="wrap">
    <div class="tpn-shead center" data-aos="fade-up">
      <div class="tpn-eyebrow" style="justify-content:center"><span class="dot"></span>Os níveis</div>
      <h2>Os 4 níveis de <em>Shield</em></h2>
      <p>Desde setembro de 2025, o TPN organiza a maturidade de segurança em quatro selos progressivos. Cada um representa um estágio mais avançado de comprovação.</p>
    </div>

    <!-- ===== VARIANTE 1 — 4 CARDS ===== -->
    <div class="shields-variant shv-1" data-shield-variant="1">
      <div class="grid">
        <div class="scard" data-aos="fade-up">
          <span class="shield-glyph shield-blue"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.14" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5l3.2 3.2L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <div class="lvl">Nível 1</div>
          <h3>Blue Shield</h3>
          <p>Autoavaliação concluída e publicada. A empresa preenche o questionário oficial e declara seus controles de segurança.</p>
        </div>
        <div class="scard" data-aos="fade-up" data-aos-delay="80">
          <span class="shield-glyph shield-silver"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.18" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5l3.2 3.2L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <div class="lvl">Nível 2</div>
          <h3>Silver Shield</h3>
          <p>Avaliação feita por um assessor credenciado e plano de remediação submetido. Equivale ao antigo Gold clássico.</p>
        </div>
        <div class="scard" data-aos="fade-up" data-aos-delay="160">
          <span class="shield-glyph shield-gold"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.30" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5l3.2 3.2L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <div class="lvl">Nível 3</div>
          <h3>Gold Shield</h3>
          <p>Todos os itens de boas práticas do plano de remediação concluídos e revisados pelo TPN.</p>
        </div>
        <div class="scard" data-aos="fade-up" data-aos-delay="240">
          <span class="shield-glyph shield-star"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.30" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M16 9.5l1.7 3.5 3.8.5-2.8 2.7.7 3.8-3.4-1.8-3.4 1.8.7-3.8-2.8-2.7 3.8-.5z" fill="currentColor"/></svg></span>
          <div class="lvl">Nível 4</div>
          <h3>Gold Star Shield</h3>
          <p>Boas práticas e também as recomendações adicionais concluídas e revisadas pelo TPN. O grau máximo de maturidade.</p>
        </div>
      </div>
    </div>

    <!-- ===== VARIANTE 2 — LADDER ===== -->
    <div class="shields-variant shv-2 is-active" data-shield-variant="2">
      <div class="ladder">
        <div class="step shield-blue">
          <span class="shield-glyph shield-blue"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.14" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5l3.2 3.2L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <div class="lvl">Nível 1</div>
          <h3>Blue Shield</h3>
          <p>Autoavaliação concluída e publicada pela própria empresa.</p>
        </div>
        <div class="step shield-silver">
          <span class="shield-glyph shield-silver"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.18" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5l3.2 3.2L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <div class="lvl">Nível 2</div>
          <h3>Silver Shield</h3>
          <p>Avaliação por assessor credenciado + plano de remediação.</p>
        </div>
        <div class="step shield-gold">
          <span class="shield-glyph shield-gold"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.30" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5l3.2 3.2L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <div class="lvl">Nível 3</div>
          <h3>Gold Shield</h3>
          <p>Remediações concluídas e revisadas pela TPN.</p>
        </div>
        <div class="step shield-star">
          <span class="shield-glyph shield-star"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.30" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M16 9.5l1.7 3.5 3.8.5-2.8 2.7.7 3.8-3.4-1.8-3.4 1.8.7-3.8-2.8-2.7 3.8-.5z" fill="currentColor"/></svg></span>
          <div class="lvl">Nível 4</div>
          <h3>Gold Star Shield</h3>
          <p>Boas práticas + recomendações adicionais. Grau máximo da conformidade.</p>
        </div>
      </div>
    </div>

    <!-- ===== VARIANTE 3 — PROGRESS TRACK ===== -->
    <div class="shields-variant shv-3" data-shield-variant="3">
      <div class="track">
        <div class="node">
          <span class="shield-glyph shield-blue"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.14" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5l3.2 3.2L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <div class="lvl">Nível 1</div>
          <h3>Blue Shield</h3>
          <p>Autoavaliação concluída e publicada.</p>
        </div>
        <div class="node">
          <span class="shield-glyph shield-silver"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.18" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5l3.2 3.2L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <div class="lvl">Nível 2</div>
          <h3>Silver Shield</h3>
          <p>Avaliação + plano de remediação submetido.</p>
        </div>
        <div class="node">
          <span class="shield-glyph shield-gold"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.30" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5l3.2 3.2L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <div class="lvl">Nível 3</div>
          <h3>Gold Shield</h3>
          <p>Remediações concluídas e revisadas.</p>
        </div>
        <div class="node">
          <span class="shield-glyph shield-star"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.30" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M16 9.5l1.7 3.5 3.8.5-2.8 2.7.7 3.8-3.4-1.8-3.4 1.8.7-3.8-2.8-2.7 3.8-.5z" fill="currentColor"/></svg></span>
          <div class="lvl">Nível 4</div>
          <h3>Gold Star Shield</h3>
          <p>Boas práticas + recomendações adicionais.</p>
        </div>
      </div>
    </div>

    <div class="legacy-note" data-aos="fade-up">
      <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M12 8v0.01M12 11v5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
      <span>Os antigos selos Blue e Gold (modelo clássico) seguem válidos até a data de expiração. O novo sistema de quatro níveis dá mais transparência sobre o progresso de segurança de cada parceiro.</span>
    </div>
  </div>
</section>

<!-- A JORNADA -->
<section class="s-journey" id="jornada" data-screen-label="TPN — Jornada">
  <div class="wrap">
    <div class="tpn-shead" data-aos="fade-up">
      <div class="tpn-eyebrow"><span class="dot"></span>Passo a passo</div>
      <h2>A jornada até a <em>conformidade</em></h2>
      <p>Da primeira conversa ao selo, a MDotti acompanha cada etapa. Veja como funciona na prática.</p>
    </div>

    <!-- ===== JORNADA VARIANTE 1 — TIMELINE VERTICAL ===== -->
    <div class="journey-variant jv-1" data-journey-variant="1">
      <div class="timeline">
        <div class="jstep" data-aos="fade-up">
          <div class="jstep-num">1</div>
          <div class="body">
            <h3>Diagnóstico inicial</h3>
            <p>Avaliamos sua operação atual frente às boas práticas da MPA e identificamos as lacunas de segurança a tratar.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti conduz o diagnóstico</span>
          </div>
        </div>
        <div class="jstep" data-aos="fade-up">
          <div class="jstep-num">2</div>
          <div class="body">
            <h3>Adesão ao TPN</h3>
            <p>Apoiamos seu cadastro no programa e o preenchimento do questionário auto-reportado de segurança.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti orienta o cadastro</span>
            <span class="shield-won"><span class="shield-glyph shield-blue"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.16" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg></span>Blue Shield</span>
          </div>
        </div>
        <div class="jstep" data-aos="fade-up">
          <div class="jstep-num">3</div>
          <div class="body">
            <h3>Preparação técnica</h3>
            <p>Implementamos os controles necessários: segurança física, digital, em nuvem e nos fluxos de trabalho com o conteúdo.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti implementa os controles</span>
          </div>
        </div>
        <div class="jstep" data-aos="fade-up">
          <div class="jstep-num">4</div>
          <div class="body">
            <h3>Avaliação independente</h3>
            <p>Um assessor credenciado audita seu ambiente, verifica as evidências e define o plano de remediação. A MDotti acompanha a auditoria do seu lado, online ou presencialmente.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti acompanha a auditoria · online ou presencial</span>
            <span class="shield-won"><span class="shield-glyph shield-silver"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.2" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg></span>Silver Shield</span>
          </div>
        </div>
        <div class="jstep" data-aos="fade-up">
          <div class="jstep-num">5</div>
          <div class="body">
            <h3>Remediação</h3>
            <p>Executamos os ajustes do plano e acompanhamos a revisão de cada item pelo TPN até a aprovação.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti executa a remediação</span>
            <span class="shield-won"><span class="shield-glyph shield-gold"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.3" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg></span>Gold Shield</span>
          </div>
        </div>
        <div class="jstep" data-aos="fade-up">
          <div class="jstep-num">6</div>
          <div class="body">
            <h3>Excelência contínua</h3>
            <p>Concluímos as recomendações adicionais e mantemos sua conformidade ativa nas renovações ao longo do tempo.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti mantém a conformidade</span>
            <span class="shield-won"><span class="shield-glyph shield-star"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3l11 4v8c0 7-4.7 11.7-11 13.7C9.7 26.7 5 22 5 15V7l11-4z" fill="currentColor" fill-opacity="0.3" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M16 10l1.4 3 3.2.4-2.4 2.3.6 3.2L16 19.4 13.6 21l.6-3.2L11.8 15.4l3.2-.4z" fill="currentColor"/></svg></span>Gold Star Shield</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ===== JORNADA VARIANTE 2 — ZIGZAG ===== -->
    <div class="journey-variant jv-2 is-active" data-journey-variant="2">
      <div class="zigzag">
        <div class="jstep">
          <div class="jstep-num">1</div>
          <div class="body">
            <h3>Diagnóstico inicial</h3>
            <p>Avaliamos sua operação frente às boas práticas da MPA e mapeamos as lacunas.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti conduz</span>
          </div>
        </div>
        <div class="jstep">
          <div class="jstep-num">2</div>
          <div class="body">
            <h3>Adesão a TPN</h3>
            <p>Apoiamos o cadastro e o questionário auto-reportado. Resultado: o primeiro selo.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti orienta · Blue Shield</span>
          </div>
        </div>
        <div class="jstep">
          <div class="jstep-num">3</div>
          <div class="body">
            <h3>Preparação técnica</h3>
            <p>Implementamos segurança física, digital, em nuvem e dos workflows de conteúdo.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti implementa</span>
          </div>
        </div>
        <div class="jstep">
          <div class="jstep-num">4</div>
          <div class="body">
            <h3>Avaliação independente</h3>
            <p>Assessor credenciado audita e define o plano de remediação. Acompanhamos a auditoria, online ou presencial.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti acompanha · Silver Shield</span>
          </div>
        </div>
        <div class="jstep">
          <div class="jstep-num">5</div>
          <div class="body">
            <h3>Remediação</h3>
            <p>Executamos os ajustes e acompanhamos a revisão de cada item pelo TPN.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti executa · Gold Shield</span>
          </div>
        </div>
        <div class="jstep">
          <div class="jstep-num">6</div>
          <div class="body">
            <h3>Excelência contínua</h3>
            <p>Recomendações adicionais concluídas e conformidade mantida nas renovações.</p>
            <span class="mdotti-tag"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>MDotti mantém · Gold Star</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COMO A MDOTTI AJUDA -->
<section class="s-tpn-help" id="ajuda" data-screen-label="TPN — Como a MDotti ajuda">
  <div class="wrap">
    <div class="tpn-shead" data-aos="fade-up">
      <div class="tpn-eyebrow"><span class="dot"></span>Nosso papel</div>
      <h2>Como a <em>MDotti</em> ajuda</h2>
      <p>Mais que consultoria: cuidamos da infraestrutura e dos controles que sustentam o selo, de ponta a ponta.</p>
    </div>
    <div class="grid">
      <div class="hcard" data-aos="fade-up">
        <div class="ic"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-consulting.svg" alt=""></div>
        <h4>Consultoria especializada</h4>
        <p>Interpretamos as exigências da TPN e traçamos o caminho mais curto para a realidade da sua operação.</p>
      </div>
      <div class="hcard" data-aos="fade-up" data-aos-delay="80">
        <div class="ic"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-chip.svg" alt=""></div>
        <h4>Infraestrutura segura</h4>
        <p>Projetamos e fornecemos ambientes e equipamentos alinhados às boas práticas de segurança de conteúdo.</p>
      </div>
      <div class="hcard" data-aos="fade-up" data-aos-delay="160">
        <div class="ic"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-transp.svg" alt=""></div>
        <h4>Implementação de controles</h4>
        <p>Colocamos em prática a segurança física, digital, de nuvem e dos fluxos de trabalho com o material.</p>
      </div>
      <div class="hcard" data-aos="fade-up" data-aos-delay="240">
        <div class="ic"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-support.svg" alt=""></div>
        <h4>Acompanhamento contínuo</h4>
        <p>Suporte nas auditorias, remediações e renovações para manter sua conformidade sempre ativa.</p>
      </div>
    </div>
  </div>
</section>

<!-- PADRÕES E PARCERIAS -->
<section class="s-tpn-partners" data-screen-label="TPN — Padrões e parcerias">
  <div class="wrap">
    <div class="tpn-shead center" data-aos="fade-up">
      <div class="tpn-eyebrow" style="justify-content:center"><span class="dot"></span>Padrões e parcerias</div>
      <h2 style="font-size:clamp(2.6rem,3vw,3.6rem)">Alinhados aos padrões da indústria</h2>
    </div>
    <div class="seals" data-aos="fade-up">
      <div class="seal">
        <div class="mark">TPN</div>
        <div class="nm">Trusted Partner Network</div>
        <div class="sub">Programa oficial de segurança de conteúdo</div>
      </div>
      <div class="seal">
        <div class="mark alt">MPA</div>
        <div class="nm">MPA Best Practices</div>
        <div class="sub">Content Security Best Practices v5.3.1</div>
      </div>
    </div>
  </div>
</section>

<!-- LOGOS DE CLIENTES -->
<section class="s-clients" data-screen-label="TPN — Clientes">
  <main class="container-full">
    <div class="container">
      <div class="tpn-clients">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/sdvc.jpg" alt="SDVC">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/etc.jpg" alt="ETC">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/unisom.jpg" alt="Unisom">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/iguale.jpg" alt="Iguale">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/centauro.jpg" alt="Centauro">
      </div>
    </div>
  </main>
</section>

<!-- END CTA -->
<section class="s-end">
  <main class="container-full">
    <video src="<?php echo get_template_directory_uri(); ?>/video/bg-mdotti-hero.mp4" autoplay loop playsinline muted></video>
    <div class="container">
      <div class="text">
        <h5>Trusted Partner Network</h5>
        <h2>Pronto para conquistar a confiança dos grandes estúdios?</h2>
        <div class="cta">
          <a href="#contato" class="btn-primary purple">Falar com especialista</a>
        </div>
      </div>
    </div>
  </main>
</section>

<!-- CONTATO -->
<section class="s-contact" id="contato" data-screen-label="TPN — Contato">
  <div class="container">
    <div class="top">
      <div class="title">
        <h2>Vamos conversar?</h2>
        <p>Conte para a gente o momento da sua operação. Um especialista da MDotti vai indicar o caminho mais adequado rumo à conformidade TPN.</p>
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

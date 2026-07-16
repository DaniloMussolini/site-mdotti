<?php
/**
 * Template Name: ZBoox Cloud
 *
 * Página do produto ZBoox Cloud — armazenamento em nuvem para audiovisual.
 *
 * Inclui:
 *   - Hero (texto + logo grande à direita)
 *   - Destaques (4 cards)
 *   - Recursos (4 blocos zigzag com mockups em CSS)
 *   - Painel de números (banda, disponibilidade, etc.)
 *   - Planos (3 pacotes) + adicionais
 *   - Infraestrutura
 *   - CTA final + Contato (com vídeo de fundo no bloco do YouTube)
 *
 * Dependências (registradas em functions.php — ver functions-snippet.php):
 *   - css/zboox-cloud.css
 *
 * Imagem nova em /img/assets/:
 *   zboox-cloud-logo.png  (logo do ZBoox Cloud — exportar do ClickUp; ver README)
 *
 * AOS já é carregado pelo tema. SVGs são inline (não há imagens de mockup).
 *
 * @package mdotti
 */

get_header();
?>

<!-- HERO -->
<section class="s-hero-cloud">
  <div class="grid-mesh"></div>
  <div class="container">
    <div class="text" data-aos="fade-up">
      <div class="eyebrow"><span class="dot"></span>Armazenamento em nuvem · MDotti</div>
      <h1>Armazenamento em nuvem <em>seguro, colaborativo e sob medida</em> para o audiovisual</h1>
      <p class="lead">Centralize, acesse e colabore em seus projetos com a confiabilidade da linha ZBoox — sem manter infraestrutura física própria. Para equipes locais, híbridas ou 100% remotas.</p>
      <div class="cta">
        <a href="#planos" class="btn-primary purple">Conheça os planos</a>
        <a href="#contato" class="btn-ghost">Falar com especialista</a>
      </div>
    </div>
    <div class="hero-logo" data-aos="fade-up" data-aos-delay="120">
      <div class="cloud-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/assets/zboox-cloud-logo.png" alt="ZBoox Cloud" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
        <span class="cloud-logo-text"><span class="z">Z</span>Boox <b>Cloud</b></span>
      </div>
    </div>
  </div>
</section>

<!-- DESTAQUES -->
<section class="s-destaques-cloud">
  <div class="container">
    <div class="top">
      <div class="title">
        <h2>A nuvem feita para <em>produção de conteúdo</em>.</h2>
        <p>A mesma arquitetura e filosofia do ZBoox, agora como uma extensão natural do seu ambiente de produção.</p>
      </div>
    </div>
    <main>
      <div class="box" data-aos="fade-up">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg></div>
        <h3>Escalável sob demanda</h3>
        <p>Capacidade inicial flexível e expansão dinâmica, sem interrupção de serviço conforme sua operação cresce.</p>
      </div>
      <div class="box" data-aos="fade-up" data-aos-delay="80">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg></div>
        <h3>Seguro por padrão</h3>
        <p>Tráfego criptografado, snapshots automáticos e autenticação com duplo fator protegem seus dados.</p>
      </div>
      <div class="box" data-aos="fade-up" data-aos-delay="160">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <h3>Colaboração total</h3>
        <p>Compartilhe, comente e acesse arquivos pelo navegador com o ZCloud, de qualquer lugar.</p>
      </div>
      <div class="box" data-aos="fade-up" data-aos-delay="240">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
        <h3>Monitorado 24/7</h3>
        <p>Dashboard de uso e disponibilidade, com monitoramento contínuo e suporte especializado da MDotti.</p>
      </div>
    </main>
  </div>
</section>

<!-- RECURSOS -->
<section class="s-features">
  <div class="feat-container">

    <div class="feat-row" data-aos="fade-up">
      <div class="visual">
        <div class="feat-visual viz-storage">
          <div class="viz-card">
            <div class="vh"><b>Capacidade do ambiente</b><span class="pill">escalável</span></div>
            <div class="cap"><div class="lab"><span>Essencial</span><b>5 TB</b></div><div class="track"><i style="--w:24%"></i></div></div>
            <div class="cap"><div class="lab"><span>Profissional</span><b>20 TB</b></div><div class="track"><i style="--w:52%"></i></div></div>
            <div class="cap hot"><div class="lab"><span>Corporativo</span><b>100 TB</b></div><div class="track"><i style="--w:90%"></i></div></div>
            <div class="expand"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>Expansão sob demanda, sem parar</div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="eyebrow"><span class="dot"></span>Armazenamento</div>
        <h2>Espaço de alta performance que <em>cresce com você</em></h2>
        <p>Planos com capacidade inicial flexível e expansão sob demanda, com provisionamento dinâmico conforme a evolução da operação. Ideal para projetos em andamento, masters, entregas e backups.</p>
        <ul class="check-list">
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Expansão de espaço sem interrupção de serviço</span></li>
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Ideal para projetos, masters, entregas e backup off-site</span></li>
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Ingest e migração via rede ou mídias físicas (HD, NAS, LTO)</span></li>
        </ul>
      </div>
    </div>

    <div class="feat-row reverse" data-aos="fade-up">
      <div class="visual">
        <div class="feat-visual teal viz-sec">
          <div class="shield">
            <span class="ring r1"></span><span class="ring"></span>
            <span class="core"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg></span>
          </div>
          <div class="snaps">
            <div class="snap"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>Snapshot automático<span class="tk">09:00</span></div>
            <div class="snap"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>Snapshot automático<span class="tk">12:00</span></div>
            <div class="snap on"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>Snapshot automático<span class="tk">agora</span></div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="eyebrow"><span class="dot"></span>Segurança</div>
        <h2>Seus dados <em>protegidos em todas as camadas</em></h2>
        <p>Tráfego totalmente criptografado e snapshots automáticos que protegem contra exclusões acidentais, erros operacionais e ataques de ransomware. Acessos autenticados individualmente, com duplo fator.</p>
        <ul class="check-list">
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Criptografia ponta a ponta via HTTPS e/ou VPN</span></li>
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Snapshots automáticos e proteção contra ransomware</span></li>
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Controle granular de permissões e rastreabilidade</span></li>
        </ul>
      </div>
    </div>

    <div class="feat-row" data-aos="fade-up">
      <div class="visual">
        <div class="feat-visual viz-browser">
          <div class="bwin">
            <div class="bbar"><span></span><span></span><span></span><div class="badd"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>cloud.<b>suaempresa</b>.com.br</div></div>
            <div class="bscr"><div class="bl"><span class="sq">S</span>Sua Empresa · Cloud</div><div class="sk s1"></div><div class="sk s2"></div><div class="sk s3"></div></div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="eyebrow"><span class="dot"></span>Identidade corporativa</div>
        <h2>Um ambiente <em>com a cara da sua marca</em></h2>
        <p>Cada cliente acessa o ambiente por um subdomínio vinculado ao seu próprio domínio. Mais credibilidade perante clientes e parceiros, e uma experiência personalizada e alinhada à marca da sua produtora ou estúdio.</p>
        <ul class="check-list">
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Subdomínio próprio vinculado ao seu domínio</span></li>
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Identidade profissional e credibilidade</span></li>
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Experiência personalizada para o seu cliente final</span></li>
        </ul>
      </div>
    </div>

    <div class="feat-row reverse" data-aos="fade-up">
      <div class="visual">
        <div class="feat-visual teal viz-files">
          <div class="fwin">
            <div class="frow"><span class="fic v"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m23 7-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg></span><div class="fm"><b>EP01_corte.mp4</b><span>Compartilhado por link</span></div><span class="ftag">expira 7d</span></div>
            <div class="frow"><span class="fic c"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></span><div class="fm"><b>“Aprovado, subir master”</b><span>Comentário de Ana · há 5 min</span></div><span class="ftag on">novo</span></div>
            <div class="frow"><span class="fic v"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/></svg></span><div class="fm"><b>Master_final</b><span>v4 substituiu v3</span></div><span class="ftag">v4</span></div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="eyebrow"><span class="dot"></span>ZCloud</div>
        <h2>Colaboração e <em>compartilhamento inteligente</em></h2>
        <p>O ZBoox Cloud integra o ZCloud, uma aplicação web moderna e segura para colaboração e compartilhamento de arquivos — tudo em um ambiente privado, intuitivo e totalmente web.</p>
        <ul class="check-list">
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Links protegidos por senha e data de expiração</span></li>
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Visualize, comente e substitua versões pelo navegador</span></li>
          <li><span class="ico"><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span>Sincronização automática entre computadores e dispositivos móveis</span></li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- NÚMEROS -->
<section class="s-numbers-cloud">
  <div class="band" data-aos="fade-up">
    <div class="band-head">
      <div class="eyebrow"><span class="dot"></span>Confiabilidade comprovada</div>
      <h2>Infraestrutura robusta, <em>gerida de ponta a ponta</em> pela MDotti.</h2>
    </div>
    <div class="stats">
      <div class="big-numbers"><div class="rule"></div><strong>99%</strong><span>disponibilidade média em condições normais</span></div>
      <div class="big-numbers"><div class="rule"></div><strong>24/7</strong><span>monitoramento contínuo pela equipe MDotti</span></div>
      <div class="big-numbers"><div class="rule"></div><strong>Até 1&nbsp;Gbps</strong><span>de banda dedicada por ambiente</span></div>
      <div class="big-numbers"><div class="rule"></div><strong>+600</strong><span>clientes atendidos pela MDotti</span></div>
    </div>
  </div>
</section>

<!-- PLANOS -->
<section class="s-plans" id="planos">
  <div class="plans-head">
    <div class="eyebrow"><span class="dot"></span>Planos e expansão</div>
    <h2>Pacotes modulares que <em>acompanham seu crescimento</em></h2>
    <p>Capacidade, banda e usuários sob medida. Expansão sob demanda, sem migrações complexas e sem interrupção de serviço.</p>
  </div>

  <div class="plans-grid">
    <div class="plan-card" data-aos="fade-up">
      <div class="tag">Essencial</div>
      <div class="cap">5<small> TB</small></div>
      <div class="price">
        <span class="val">R$ 600</span><span class="per">/mês</span>
        <span class="setup">Onboarding (setup inicial): R$ 500</span>
      </div>
      <ul class="specs">
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Link público de até 300 Mbps</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Upload/download ilimitado · 1 IP público</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>5 usuários via VPN</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Até 10 usuários de acesso web</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Espaço adicional: +2 TB por R$ 240</li>
      </ul>
      <a href="#contato" class="btn-plan">Solicitar proposta</a>
    </div>

    <div class="plan-card featured" data-aos="fade-up" data-aos-delay="80">
      <div class="tag">Profissional · mais escolhido</div>
      <div class="cap">20<small> TB</small></div>
      <div class="price">
        <span class="val">R$ 1.600</span><span class="per">/mês</span>
        <span class="setup">Onboarding (setup inicial): R$ 800</span>
      </div>
      <ul class="specs">
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Link público de até 500 Mbps</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Upload/download ilimitado · 1 IP público</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>5 usuários via VPN</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Até 20 usuários de acesso web</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Espaço adicional: +8 TB por R$ 640</li>
      </ul>
      <a href="#contato" class="btn-plan">Solicitar proposta</a>
    </div>

    <div class="plan-card" data-aos="fade-up" data-aos-delay="160">
      <div class="tag">Corporativo</div>
      <div class="cap">100<small> TB</small></div>
      <div class="price">
        <span class="val">R$ 6.000</span><span class="per">/mês</span>
        <span class="setup">Onboarding (setup inicial): R$ 1.300</span>
      </div>
      <ul class="specs">
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Link público de até 1.000 Mbps</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Upload/download ilimitado · 1 IP público</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>5 usuários via VPN</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Até 50 usuários de acesso web</li>
        <li><svg viewBox="0 0 16 16" fill="none"><path d="M2 8.5l3 3 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Espaço adicional: +20 TB por R$ 1.200</li>
      </ul>
      <a href="#contato" class="btn-plan">Solicitar proposta</a>
    </div>
  </div>

  <div class="addons">
    <div class="inner">
      <h4>Expanda quando precisar:</h4>
      <div class="item">Acesso web adicional · <strong>R$ 10</strong> / usuário</div>
      <div class="item">Acesso VPN adicional · <strong>R$ 50</strong> / usuário</div>
      <div class="item">Espaço extra · <strong>sob demanda</strong></div>
    </div>
  </div>
  <p class="note">Valores mensais de referência. Expansão de espaço e usuários realizada de forma dinâmica, sem interrupção de serviço.</p>
</section>

<!-- INFRA -->
<section class="s-infra">
  <div class="infra-inner">
    <div class="content" data-aos="fade-up">
      <div class="eyebrow"><span class="dot"></span>Infraestrutura e disponibilidade</div>
      <h2>Continuidade operacional com <em>monitoramento contínuo</em></h2>
      <p>Ambiente mantido em infraestrutura redundante, com nobreaks de alta capacidade para garantir continuidade em quedas de curta duração e acompanhamento ativo do time técnico da MDotti.</p>
    </div>
    <div class="infra-cards" data-aos="fade-up" data-aos-delay="80">
      <div class="ic">
        <div class="ic-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="6" rx="1"/><rect x="2" y="15" width="20" height="6" rx="1"/><path d="M6 6h.01M6 18h.01"/></svg></div>
        <h4>Redundância</h4>
        <p>Infraestrutura redundante com nobreaks de alta capacidade.</p>
      </div>
      <div class="ic">
        <div class="ic-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
        <h4>99% de operação</h4>
        <p>Índices médios de disponibilidade em condições normais.</p>
      </div>
      <div class="ic">
        <div class="ic-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
        <h4>Monitoramento 24/7</h4>
        <p>Acompanhamento contínuo realizado pelo time técnico.</p>
      </div>
      <div class="ic">
        <div class="ic-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/><path d="M12 7v5l3 2"/></svg></div>
        <h4>Suporte com SLA</h4>
        <p>Atuação preventiva, corretiva e consultiva, com SLA em contrato.</p>
      </div>
    </div>
  </div>
</section>

<!-- END CTA -->
<section class="s-end">
  <main class="container-full">
    <div class="container">
      <div class="text">
        <h5>ZBoox Cloud</h5>
        <h2>Leve seu acervo para a nuvem com segurança.</h2>
        <div class="cta">
          <a href="#contato" class="btn-primary purple">Entre em contato</a>
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
        <video src="https://mdotti.com/core/views/a9c5111cff/video/bn-video-mdotti.mp4" autoplay loop playsinline muted></video>
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

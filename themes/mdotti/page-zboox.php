<?php
/**
 * Template Name: ZBoox
 *
 * Página do produto ZBoox (storage para o mercado audiovisual) — redesign 2026.
 *
 * Seções:
 *   - Hero (texto + imagens ZH/Mini + chips)
 *   - Intro "O que é o ZBoox" (texto do Wiki + pills)
 *   - Recursos (4 cards)
 *   - Modelos (ZBoox Mini + ZBoox ZH)
 *   - Por que ZBoox (Flexibilidade / Robustez / Monitoramento 24x7)
 *   - Interface de gerenciamento (carrossel de 8 telas, auto-rotação + setas)
 *   - Painel de números
 *   - CTA final
 *
 * Dependências (registradas em functions.php — ver functions-snippet.php):
 *   - css/zboox.css
 *
 * Imagem hospedada no tema (/img/assets/):
 *   monitoramento-slide9.png  (dashboard de monitoramento — incluída no pacote)
 *
 * As demais imagens (produtos, ícones, telas, pilares) apontam para os assets
 * já publicados em produção (mdotti.com/core/... e mdotti.com/storage/...).
 *
 * @package mdotti
 */

get_header();
$img = get_template_directory_uri() . '/img/assets';
$core = 'https://mdotti.com/core/views/a9c5111cff/img';
$store = 'https://mdotti.com/storage/2025/05';
?>

<div class="zbx">
<div class="edt" id="edt">

  <!-- HERO -->
  <section class="hero"><div class="wrap"><div class="grid">
    <div class="txt">
      <span class="eyebrow">Storage para audiovisual</span>
      <h1>O servidor feito para <mark>produção de conteúdo</mark>.</h1>
      <p>O ZBoox é um storage desenvolvido especificamente para workflows audiovisuais — do ingest de grandes volumes de mídia à edição direta pela rede, com projetos centralizados e protegidos.</p>
      <div class="cta"><a class="btn purple" href="#modelos">Conheça o ZBoox</a><a class="btn ghost-d" href="#modelos">Ver modelos</a></div>
    </div>
    <div class="visual">
      <img class="main" src="<?php echo $core; ?>/assets/zboox-zh.png" alt="ZBoox ZH">
      <img class="mini" src="<?php echo $core; ?>/assets/zboox-mini.png" alt="ZBoox Mini">
      <div class="chip c1"><strong>edit-in-place</strong><span>edição direta pela rede</span></div>
      <div class="chip c2"><strong>Scale Out</strong><span>aumento dinâmico de espaço</span></div>
    </div>
  </div></div></section>

  <!-- INTRO -->
  <section class="intro"><div class="wrap"><div class="grid">
    <div class="lead"><span class="tag">O que é o ZBoox</span><p>A base de armazenamento dos workflows audiovisuais da MDotti. Um servidor baseado em <b>Linux</b> com tecnologias robustas e consolidadas, que sustenta toda a cadeia de produção — <b>do ingest à finalização</b> — com segurança, performance e escala.</p></div>
    <div class="pills"><span>Ingest de grandes volumes</span><span>Edit-in-place</span><span>Centralização segura</span><span>Múltiplos editores simultâneos</span><span>Monitorado pela MDotti</span></div>
  </div></div></section>

  <!-- RECURSOS -->
  <section class="feats"><div class="wrap">
    <div class="sechead"><span class="tag">Recursos</span><h2>Feito para o fluxo audiovisual</h2></div>
    <div class="grid">
      <div class="c"><div class="ic"><img src="<?php echo $core; ?>/icons/icon-circles.svg" width="24" alt=""></div><h3>Edit-in-place</h3><p>Múltiplos editores trabalham direto no storage pela rede, sem cópias ou transferências.</p></div>
      <div class="c"><div class="ic"><img src="<?php echo $core; ?>/icons/icon-intersect.svg" width="24" alt=""></div><h3>Armazenamento centralizado</h3><p>Todos os projetos audiovisuais reunidos e protegidos, com controle de acesso por usuários e grupos.</p></div>
      <div class="c"><div class="ic"><img src="<?php echo $core; ?>/icons/icon-lock.svg" width="24" alt=""></div><h3>Filesystem Moderno</h3><p>Proteção contra perda de dados, checksum e mecanismos de recuperação integrados.</p></div>
      <div class="c"><div class="ic"><img src="<?php echo $core; ?>/icons/icon-joy.svg" width="24" alt=""></div><h3>Monitoramento ativo</h3><p>A MDotti acompanha desempenho, capacidade e eventos críticos para prevenir falhas.</p></div>
    </div>
  </div></section>

  <!-- MODELOS -->
  <section class="models" id="modelos"><div class="wrap">
    <div class="sechead"><span class="tag">Modelos</span><h2>Uma linha para cada porte</h2></div>
    <div class="mstack">
      <div class="mrow">
        <div class="mpic"><img src="<?php echo $core; ?>/assets/zboox-mini.png" alt="ZBoox Mini"></div>
        <div class="mtxt"><div class="name">ZBoox Mini</div><h3>Compacto e versátil</h3><p>O mesmo formato das grandes infraestruturas em um ambiente enxuto e sem complexidade. Até 92TB úteis em uma caixa compacta, rodando o mesmo sistema dos irmãos maiores.</p><ul><li><b>·</b> Chassi customizado e ergonômico</li><li><b>·</b> 8 baias Hot-Swap</li><li><b>·</b> Dual 10Gb Base-T (Opcional SFP+)</li><li><b>·</b> Até 92TB de espaço útil</li></ul></div>
      </div>
      <div class="mrow rev">
        <div class="mpic"><img src="<?php echo $core; ?>/assets/zboox-zh.png" alt="ZBoox ZH"></div>
        <div class="mtxt"><div class="name">ZBoox ZH</div><h3>Profissional e escalável</h3><p>A linha ZH consolida espaço e performance para demandas de médio à grande porte, permitindo a expansão do volume de forma dinâmica e prática.</p><ul><li><b>·</b> Chassi Rack 2/4U</li><li><b>·</b> Até <b class="n">1PB</b> de espaço útil em 4U</li><li><b>·</b> Portas 10/25/100Gb Base-T, SFP+ e QSFP</li><li><b>·</b> Fonte redundante</li><li class="hl"><b>★</b> Scale Out — expansão dinâmica</li></ul></div>
      </div>
    </div>
  </div></section>

  <!-- POR QUE ZBOOX -->
  <section class="pillars"><div class="wrap">
    <div class="sechead"><span class="tag">Por que ZBoox</span><h2>Construído para não parar</h2></div>
    <div class="row">
      <div class="pic"><img src="<?php echo $img; ?>/flexibilidade-zboox.png" alt="Flexibilidade"></div>
      <div class="txt"><span class="tag">Flexibilidade</span><h3>Compatível com o seu workflow</h3><p>Integra-se a diferentes fluxos de trabalho, sistemas operacionais (Windows, Linux e macOS) e softwares do mercado, como Adobe Premiere Pro, Avid Media Composer, DaVinci Resolve, entre outros.</p></div>
    </div>
    <div class="row rev">
      <div class="pic"><img src="<?php echo $store; ?>/resources-zboox-5.jpg" alt="Robustez" style="object-fit:contain;background:#0e0d18"></div>
      <div class="txt"><span class="tag">Robustez</span><h3>Estabilidade de ponta a ponta</h3><p>Arquitetura baseada em Linux, desenvolvida e customizada para oferecer estabilidade, confiabilidade e extrair a máxima performance do hardware.</p></div>
    </div>
    <div class="row">
      <div class="pic full"><img src="<?php echo $img; ?>/monitoramento-slide9.png" alt="Dashboard de monitoramento do ZBoox"></div>
      <div class="txt"><span class="tag">Monitoramento 24x7</span><h3>Supervisão contínua e proativa</h3><p>Acompanhamento em tempo real do desempenho, integridade e segurança do sistema. O monitoramento proativo identifica possíveis falhas, garantindo alta disponibilidade e minimizando riscos de downtime.</p></div>
    </div>
  </div></section>

  <!-- INTERFACE DE GERENCIAMENTO -->
  <section class="screens"><div class="wrap">
    <div class="sechead"><span class="tag">Interface de gerenciamento</span><h2>Controle total do seu storage</h2></div>
    <div class="carousel" id="scrCar">
      <div class="track">
        <?php for ( $s = 1; $s <= 8; $s++ ) : ?>
        <figure><img src="<?php echo $core; ?>/screens/screen<?php echo $s; ?>.jpg" alt="Tela do ZBoox"></figure>
        <?php endfor; ?>
      </div>
      <button class="nav prev" aria-label="Anterior">&lsaquo;</button>
      <button class="nav next" aria-label="Próxima">&rsaquo;</button>
      <div class="dots"></div>
    </div>
  </div></section>

  <!-- NÚMEROS -->
  <section class="numbers"><div class="wrap"><div class="grid">
    <div><strong>+1<em>PB</em></strong><span>espaço útil em 4U</span></div>
    <div><strong style="font-size:45px">10/25/100<em>Gb</em></strong><span>conectividade base</span></div>
    <div><strong>24/7</strong><span>monitoramento</span></div>
    <div><strong>+600</strong><span>clientes atendidos</span></div>
  </div></div></section>

  <!-- CTA FINAL -->
  <section class="endcta"><div class="wrap"><h2>Alta performance começa com a escolha certa!</h2><p>Fale com nossos especialistas e encontre a solução ideal.</p><a class="btn purple" href="<?php echo esc_url( home_url( '/#contato' ) ); ?>">Entre em contato</a></div></section>

</div><!-- /.edt -->
</div><!-- /.zbx -->

<script>
(function(){
  var car=document.getElementById('scrCar');if(!car)return;
  var track=car.querySelector('.track');
  var slides=track.children.length;
  var dotsWrap=car.querySelector('.dots');
  var i=0,timer;
  for(var d=0;d<slides;d++){(function(n){var b=document.createElement('button');if(n===0)b.className='on';b.addEventListener('click',function(){go(n);});dotsWrap.appendChild(b);})(d);}
  var dots=dotsWrap.children;
  function render(){track.style.transform='translateX(-'+(i*100)+'%)';for(var d=0;d<slides;d++)dots[d].classList.toggle('on',d===i);}
  function go(n){i=(n+slides)%slides;render();reset();}
  function reset(){clearInterval(timer);timer=setInterval(function(){go(i+1);},4500);}
  car.querySelector('.prev').addEventListener('click',function(){go(i-1);});
  car.querySelector('.next').addEventListener('click',function(){go(i+1);});
  reset();
})();
</script>

<?php get_footer(); ?>

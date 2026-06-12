<?php
// Template name: Home
?>

<?php get_header(); ?>

<section class="s-hero">
    <video src="<?php echo get_template_directory_uri() ?>/video/bg-mdotti-hero.mp4" autoplay loop playsinline muted></video>
    <div class="container">
        <div class="swiper slide-hero">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="item-slide">
                        <div class="text">
                            <div class="icon" data-aos="zoom-in">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-ingest.svg" alt="Icon ZBoox">
                            </div>
                            <h1 class="title-slide">ZBoox</h1>
                            <p>Armazenamento seguro e escalável para o audiovisual. Performance, segurança e confiabilidade para seus projetos e mídias.</p>
                            <div class="cta">
                                <a href="<?php bloginfo('wpurl')?>/zboox/" class="btn-primary purple">Saiba mais</a>
                            </div>
                        </div>
                        <div class="asset">
                            <a href="<?php bloginfo('wpurl')?>/zboox/">
                                <img src="<?php echo get_template_directory_uri() ?>/img/assets/asset-zboox.png" alt="ZBoox">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-slide">
                        <div class="text">
                            <div class="icon" data-aos="zoom-in">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-data.svg" alt="Icon Cinegy">
                            </div>
                            <h1 class="title-slide">Cinegy Capture Pro</h1>
                            <p>Gravação multi-canal simplificada. Eficiência e qualidade no ingest de vídeo.</p>
                            <div class="cta">
                                <a href="<?php bloginfo('wpurl')?>/cinegy-capture-pro" class="btn-primary purple">Saiba mais</a>
                            </div>
                        </div>
                        <div class="asset">
                            <a href="<?php bloginfo('wpurl')?>/cinegy-capture-pro/">
                                <img src="<?php echo get_template_directory_uri() ?>/img/assets/asset-cinegy.png" alt="Cinegy">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-slide">
                        <div class="text">
                            <div class="icon" data-aos="zoom-in">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-selo.svg" alt="Icon TPN">
                            </div>
                            <h1 class="title-slide">TPN</h1>
                            <p>Infraestrutura alinhada aos padrões internacionais. A MDotti Tecnologia ajuda sua empresa a atender às exigências da Trusted Partner Network (TPN).</p>
                            <div class="cta">
                                <a href="<?php bloginfo('wpurl')?>/tpn-trusted-partner-network" class="btn-primary purple">Saiba mais</a>
                            </div>
                        </div>
                        <div class="asset">
                            <a href="<?php bloginfo('wpurl')?>/tpn-trusted-partner-network/">
                                <img src="<?php echo get_template_directory_uri() ?>/img/assets/asset-tpn-home-2.png" alt="TPN">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-slide">
                        <div class="text">
                            <div class="icon" data-aos="zoom-in">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-workstartion.svg" alt="Icon Workstation">
                            </div>
                            <h1 class="title-slide">Workstations</h1>
                            <p>Nossas workstations são montadas sob medida para suas necessidades, sempre com os melhores e mais modernos componentes.</p>
                            <div class="cta">
                                <a href="<?php bloginfo('wpurl')?>/workstation" class="btn-primary purple">Saiba mais</a>
                            </div>
                        </div>
                        <div class="asset">
                            <a href="<?php bloginfo('wpurl')?>/workstation/">
                                <img src="<?php echo get_template_directory_uri() ?>/img/assets/workstation-asset.png" alt="Workstation">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<?php include(TEMPLATEPATH .'/includes/clientes.php')?>

<section class="s-about" id="sobre">
    <div class="container">
        <div class="top">
            <div class="title">
                <h2>Conheça a MDotti</h2>
                <p>A MDotti Tecnologia é uma empresa brasileira que une expertise em TI e conhecimento no mercado audiovisual para oferecer soluções completas e acessíveis. Atendemos desde demandas diárias de produtores de áudio e vídeo até projetos complexos, como reality shows e longas-metragens. Nossa missão é desmistificar e democratizar tecnologias de pré e pós-produção.</p>
            </div>
            <div class="cta" data-aos="fade-down">
                <a href="#contato" class="btn-primary purple">Entre em contato</a>
            </div>
        </div>
        <main>
            <div class="group-itens">
                <div class="itens">
                    <div class="icon" data-aos="zoom-in">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-portfolio.svg" alt="Icon Portfolio">
                    </div>
                    <h4>Amplo Portfólio</h4>
                    <p>Serviços e produtos completos para entregar soluções tecnológicas que sua empresa precisa.
                    </p>
                </div>
                <div class="itens">
                    <div class="icon" data-aos="zoom-in">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-otimizacao.svg" alt="Icon Otimização">
                    </div>
                    <h4>Otimização de recursos</h4>
                    <p>Aproveitamos e adequamos ao máximo a infraestrutura existente do cliente para desenvolver novas soluções.
                    </p>
                </div>
                <div class="itens">
                    <div class="icon" data-aos="zoom-in">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-flex.svg" alt="Icon Flexibilidade">
                    </div>
                    <h4>Flexibilidade</h4>
                    <p>Soluções financeiras para adequar o investimento disponível a sua demanda
                    </p>
                </div>
                <div class="itens">
                    <div class="icon" data-aos="zoom-in">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-support.svg" alt="Icon Suporte">
                    </div>
                    <h4>Suporte</h4>
                    <p>Em todo o Brasil com um time especializado para atendimento técnico e as mais diversas
                        demandas do Audiovisual.
                    </p>
                </div>
                <div class="itens">
                    <div class="icon" data-aos="zoom-in">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-garantia.svg" alt="Icon Garantia">
                    </div>
                    <h4>Garantia</h4>
                    <p>De 1 à 3 anos em todos os produtos com serviço on site e reposição de peças Next Business
                        Day.
                    </p>
                </div>
                <div class="itens">
                    <div class="icon" data-aos="zoom-in">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-transp.svg" alt="Icon Transparência">
                    </div>
                    <h4>Transparência</h4>
                    <p>Relacionamento pessoal e profissional claro e sem pegadinhas.
                    </p>
                </div>
                <div class="itens">
                    <div class="icon" data-aos="zoom-in">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-truck.svg" alt="Icon Entrega">
                    </div>
                    <h4>Entrega rápida</h4>
                    <p>Trabalhamos com uma entrega rápida para não comprometer a performance dos seus projetos.
                    </p>
                </div>
                <div class="itens">
                    <div class="icon" data-aos="zoom-in">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-square.svg" alt="Icon Diversos">
                    </div>
                    <h4>Diversos modelos de negócio</h4>
                    <p>Soluções financeiras para adequar o investimento disponível a sua demanda: venda, locação ou
                        leasing.
                    </p>
                </div>
            </div>
            <div class="side">
                <div class="big-numbers">
                    <span>Número de Clientes</span>
                    <strong data-aos="zoom-in">+600</strong>
                </div>
                <div class="big-numbers">
                    <span>Anos de Experiência fornecendo infraestrutura e suporte para o mercado audiovisual</span>
                    <strong data-aos="zoom-in">+15</strong>
                </div>
                <div class="big-numbers">
                    <span>Atendimentos técnicos realizados</span>
                    <strong data-aos="zoom-in">+10K</strong>
                </div>
            </div>
        </main>
    </div>
</section>

<section class="s-solutions" id="produtos">
    <div class="container">
        <div class="top">
            <div class="title">
                <h2>Conheça nossas soluções</h2>
                <p>MDotti conta com diversos serviços e soluções para te ajudar a crescer ainda mais! Clique no itens e confira:</p>
            </div>
            <div class="cta" data-aos="fade-down">
                <a href="#contato" class="btn-primary purple">Entre em contato</a>
            </div>
        </div>
    </div>
    <main class="container-full">
        <div class="box">
            <a href="<?php bloginfo('wpurl')?>/zboox/"></a>
            <div class="icon" data-aos="zoom-in">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-ingest.svg" alt="ZBoox">
            </div>
            <h4>ZBoox</h4>
            <p>Nosso carro-chefe! Uma solução de armazenamento de alta performance, escalável e projetada para atender a qualquer demanda do setor audiovisual. O ZBoox permite a centralização de mídias e projetos, garantindo segurança, organização e flexibilidade para seu workflow, com a escalabilidade que sua produção precisa.</p>
        </div>
        <div class="box">
            <a href="<?php bloginfo('wpurl')?>/workstation/"></a>
            <div class="icon" data-aos="zoom-in">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-workstartion.svg" alt="Workstations">
            </div>
            <h4>Workstations</h4>
            <p>Nossas workstations são feitas sob medida para o que você precisa: Edição de Vídeo, Correção de cor, Áudio, VFX, 3D, Motion Graphics, Finalização de Vídeo, Delivery e muito mais! Sempre com os melhores e mais modernos componentes.</p>
        </div>
        <div class="box">
            <a href="<?php bloginfo('wpurl')?>/cinegy-capture-pro/"></a>
            <div class="icon" data-aos="zoom-in">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-data.svg" alt="Cinegy Capture Pro">
            </div>
            <h4>Cinegy Capture Pro</h4>
            <p>Uma solução poderosa para ingest de video em tempo real, gravação de múltiplos canais simultaneamente, com segurança, flexibilidade e escalabilidade. Automatize seu workflow, otimize recursos e garanta arquivos prontos para edição e distribuição sem complicações.</p>
        </div>
        <div class="box">
            <a href="<?php bloginfo('wpurl')?>/tpn-trusted-partner-network/"></a>
            <div class="icon" data-aos="zoom-in">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-selo.svg" alt="TPN">
            </div>
            <h4>TPN</h4>
            <p>Viabilizamos a conformidade do seu ambiente com a Trusted Partner Network (TPN), Blue Shield e Gold Shield, garantindo que sua infraestrutura atenda aos mais altos padrões de segurança exigidos pelo mercado audiovisual.</p>
        </div>
        <div class="box">
            <a href="<?php bloginfo('wpurl')?>/suporte-a-workflow/"></a>
            <div class="icon" data-aos="zoom-in">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-consulting.svg" alt="Suporte ao Workflow">
            </div>
            <h4>Suporte ao Workflow</h4>
            <p>Da captação ao archiving, estruturamos e aprimoramos cada etapa do seu fluxo de trabalho, integrando as soluções MDotti para garantir eficiência, segurança e produtividade.</p>
        </div>
        <div class="box">
            <a href="<?php bloginfo('wpurl')?>/modelos-de-negocio/"></a>
            <div class="icon" data-aos="zoom-in">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-locacao.svg" alt="Modelos de Negócio">
            </div>
            <h4>Modelos de Negócio</h4>
            <p>Amplie sua produção sem alto investimento inicial. Com a locação com opção de compra, você conta com suporte, seguro incluso e a possibilidade de adquirir o equipamento ao final do contrato, evitando a descapitalização da sua empresa.</p>
        </div>
    </main>
</section>

<!-- ============ MODELOS DE NEGÓCIO ============ -->
<section class="s-models" id="modelos">
    <div class="sm-inner">
        <div class="sm-header" data-aos="fade-up">
            <div class="sm-eyebrow"><span class="dot"></span>Escolha como investir</div>
            <h2>Três formas de ter a <em>melhor tecnologia</em></h2>
            <p>Independentemente do tamanho ou da duração do projeto, há um modelo que se adequa ao seu momento financeiro e operacional.</p>
        </div>

        <div class="sm-grid" data-highlight="featured">

            <!-- VENDA -->
            <article class="sm-card" data-model="venda">
                <div class="sm-photo" role="img" aria-label="Venda — estrutura própria">
                    <span class="sm-glyph">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M20.6 13.4l-7.2 7.2a2 2 0 0 1-2.8 0l-6.2-6.2a2 2 0 0 1-.6-1.4V4.6a1 1 0 0 1 1-1h8.4a2 2 0 0 1 1.4.6l6 6a2 2 0 0 1 0 2.8z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><circle cx="8.2" cy="8.2" r="1.5" stroke="currentColor" stroke-width="1.6"/></svg>
                    </span>
                    <span class="sm-photo-tag">Patrimônio próprio</span>
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
                <div class="sm-photo" role="img" aria-label="Leasing — locação com opção de compra">
                    <span class="sm-glyph">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M20.5 12a8.5 8.5 0 1 1-2.5-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/><path d="M20.5 3.5V9H15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 12.2l2 2 4.2-4.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="sm-photo-tag">Use agora · decida no fim</span>
                </div>
                <div class="sm-body">
                    <div class="sm-label"><span class="dot"></span>Locação com Opção de Compra</div>
                    <h3>Leasing <em>estratégico</em></h3>
                    <p>Nosso modelo mais estratégico. Opere com os equipamentos ideais desde o início, sem descapitalizar sua empresa — e decida no fim do contrato.</p>
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
                <div class="sm-photo" role="img" aria-label="Locação — flexível e pontual">
                    <span class="sm-glyph">
                        <svg viewBox="0 0 24 24" fill="none"><rect x="3.5" y="4.8" width="17" height="16" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M3.5 9.4h17M8 3v3.6M16 3v3.6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/><path d="M12 12.4v3l2 1.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="sm-photo-tag">Por período · sob demanda</span>
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

<?php include(TEMPLATEPATH .'/includes/newsletter.php')?>

<section class="s-blog" id="blog">
    <div class="container">
        <div class="top">
            <div class="title">
                <h2>Acompanhe as notícias do mercado</h2>
                <p>Veja abaixo as principais notícias do mercado Audiovisual.</p>
            </div>
        </div>
    </div>

    <main class="container-full">
        <div class="swiper slide-blog" data-aos="fade-down">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();
                ?>
                <div class="swiper-slide">
                    <?php include(TEMPLATEPATH .'/includes/slide-post.php')?>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="nav">
                <div class="arrow arrow-left arrow-left-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-arrow-left-purple.svg" alt="Arrow">
                </div>
                <div class="arrow arrow-right arrow-right-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-arrow-right-purple.svg" alt="Arrow">
                </div>
            </div>
        </div>
    </main>

    <div class="container-full more-news">
        <div class="container">
            <div class="group-more-news">
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'offset'         => 3,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();
                ?>
                <div class="thumb-news">
                    <div class="category-mdotti">
                        <ul>
                            <?php foreach(get_the_category() as $category): ?>
                                <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php include(TEMPLATEPATH .'/includes/contato.php')?>

<?php get_footer(); ?>
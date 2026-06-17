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
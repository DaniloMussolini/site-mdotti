<?php
// Template name: Workstation
?>

<?php get_header(); ?>

<section class="s-hero-product">
    <div class="container">
        <div class="text" data-aos="fade">
            <h5><?php the_title(); ?></h5>
            <h1><?php the_field('titulo_principal') ?></h1>
            <div class="cta">
                <a href="#contato" class="btn-primary purple">Faça seu pedido</a>
            </div>
        </div>
        <div class="asset" data-aos="fade-up">
            <img src="<?php the_field('imagem_do_produto') ?>" alt="Workstation">
        </div>
    </div>
</section>

<section class="s-clients s-clients-workstation">
    <main class="container-full">
        <div class="container">
            <div class="swiper slide-logos">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logos/avid.jpg" alt="Parceiros">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logos/davinci.jpg" alt="Parceiros">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logos/premiere.jpg" alt="Parceiros">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logos/blender.jpg" alt="Parceiros">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logos/autodesk.jpg" alt="Parceiros">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logos/3ds.jpg" alt="Parceiros">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logos/nuke.jpg" alt="Parceiros">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logos/houdini.jpg" alt="Parceiros">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>

<section class="s-sevice-resources">
    <div class="container">
        <div class="top">
            <div class="title">
                <h2>Serviços & Recursos</h2>
                <p><?php the_field('main_descricao_recursos') ?></p>
            </div>
            <div class="cta" data-aos="fade-down">
                <div class="arrow arrow-left arrow-left-resources">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-arrow-left-white.svg" alt="Arrow">
                </div>
                <div class="arrow arrow-right arrow-right-resources">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-arrow-right-white.svg" alt="Arrow">
                </div>
            </div>
        </div>
        <main>
            <div class="swiper slide-resources">
                <div class="swiper-wrapper">
                    <?php if( have_rows('carrossel_services') ): while ( have_rows('carrossel_services') ) : the_row(); ?>
                    <div class="swiper-slide">
                        <div class="thumb-resources">
                            <div class="photo">
                                <img src="<?php the_sub_field('imagem_carrossel') ?>" alt="Recursos">
                            </div>
                            <p><?php the_sub_field('descricao_carrossel') ?></p>
                        </div>
                    </div>
                    <?php endwhile; else : endif;?>
                </div>
            </div>
        </main>
    </div>
</section>

<section class="s-end">
    <main class="container-full">
        <video src="<?php echo get_template_directory_uri() ?>/video/bg-mdotti-hero.mp4" autoplay loop playsinline muted></video>
        <div class="container">
            <div class="text" data-aos="zoom-in">
                <h5><?php the_title(); ?></h5>
                <h2>Alta performance começa com a escolha certa!</h2>
                <div class="cta">
                    <a href="#contato" class="btn-primary purple">Faça seu pedido</a>
                </div>
            </div>
        </div>
    </main>
</section>

<?php include(TEMPLATEPATH .'/includes/contato.php')?>

<?php get_footer(); ?>
<?php
// Template name: Produtos
?>

<?php get_header(); ?>

<section class="s-hero-product">
    <div class="container">
        <div class="text" data-aos="fade">
            <h5><?php the_title(); ?></h5>
            <h1><?php the_field('titulo_principal') ?></h1>
            <div class="cta">
                <a href="#contato" class="btn-primary purple">Fale conosco</a>
            </div>
        </div>
        <div class="asset" data-aos="fade-up">
            <img src="<?php the_field('imagem_do_produto') ?>" alt="Workstation">
        </div>
    </div>
</section>

<section class="s-numbers">
    <main class="container-full">
        <div class="container">
            <div class="big-numbers">
                <span><?php the_field('label_number_1') ?></span>
                <strong data-aos="zoom-in"><?php the_field('numero_number_1') ?></strong>
            </div>
            <div class="big-numbers">
                <span><?php the_field('label_number_2') ?></span>
                <strong data-aos="zoom-in"><?php the_field('numero_number_2') ?></strong>
            </div>
            <div class="big-numbers">
                <span><?php the_field('label_number_3') ?></span>
                <strong data-aos="zoom-in"><?php the_field('numero_number_3') ?></strong>
            </div>
            <div class="big-numbers">
                <span><?php the_field('label_number_4') ?></span>
                <strong data-aos="zoom-in"><?php the_field('numero_number_4') ?></strong>
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

<?php include(TEMPLATEPATH .'/includes/clientes.php')?>

<section class="s-end">
    <main class="container-full">
        <video src="<?php echo get_template_directory_uri() ?>/video/bg-mdotti-hero.mp4" autoplay loop playsinline muted></video>
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
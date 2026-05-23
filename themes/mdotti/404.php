<?php get_header(); ?>

<section class="s-end">
    <main class="container-full">
        <video src="<?php echo get_template_directory_uri() ?>/video/bg-mdotti-hero.mp4" autoplay loop playsinline muted></video>
        <div class="container">
            <div class="text" data-aos="zoom-in">
                <h5>Página não encontrada</h5>
                <h2>404</h2>
                <div class="cta">
                    <a href="<?php bloginfo('wpurl')?>" class="btn-primary purple">Voltar</a>
                </div>
            </div>
        </div>
    </main>
</section>

<?php get_footer(); ?>
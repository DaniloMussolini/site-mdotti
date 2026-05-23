<?php
// Template name: Info
?>

<?php get_header(); ?>

<section class="s-info">
    <div class="container">
        <div class="top">
            <div class="title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <main>
            <?php the_content(); ?>
        </main>
    </div>
</section>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="s-blog s-blog-page s-cover-post">
    <main class="container-full">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </main>
</section>

<section class="s-article">
    <div class="container">
        <article>
            <div class="head">
                <div class="category-mdotti">
                    <ul>
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            foreach ($categories as $category) :
                        ?>
                                <li>
                                    <a href="<?php echo get_category_link($category->term_id); ?>">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                </li>
                        <?php endforeach;
                        endif; ?>
                    </ul>
                </div>
                <div class="date"><?php echo get_the_date(); ?></div>
            </div>
            <div class="title">
                <h1><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p><?php the_excerpt(); ?></p>
                <?php endif; ?>
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>
        
        <aside>
            <?php
            // Query para posts relacionados pela mesma categoria
            $related_args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post__not_in'   => array(get_the_ID()),
                'category__in'   => wp_get_post_categories(get_the_ID()),
            );
            $related_posts = new WP_Query($related_args);
            if ($related_posts->have_posts()) :
                while ($related_posts->have_posts()) : $related_posts->the_post();
            ?>
            
            <?php include(TEMPLATEPATH .'/includes/thumb-posts.php')?>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            <div class="cta">
                <a href="<?php bloginfo('wpurl')?>/blog" class="btn-primary purple">Ver todos os posts</a>
            </div>
        </aside>
    </div>
</section>

<?php include(TEMPLATEPATH .'/includes/newsletter.php')?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
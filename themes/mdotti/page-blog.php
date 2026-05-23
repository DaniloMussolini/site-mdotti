<?php
// Template name: Blog
?>

<?php get_header(); ?>

<section class="s-blog s-blog-page">
    <main class="container-full">
        <div class="slide-blog">
            <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 1,
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
    </main>
</section>

<?php include(TEMPLATEPATH .'/includes/newsletter.php')?>

<section class="s-category">
    <div class="container">
        <div class="swiper slide-category">
            <div class="swiper-wrapper">
                <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => true, // Oculta categorias sem posts
                ));

                foreach ($categories as $category) :
                    $icon_url = get_field('icon_category', 'category_' . $category->term_id);

                    ?>
                    <div class="swiper-slide">
                        <a href="<?php echo get_category_link($category->term_id); ?>" class="box-category">
                            <div class="icon">
                                <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($category->name); ?>">
                            </div>
                            <strong><?php echo esc_html($category->name); ?></strong>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="s-news-list">
    <div class="container">
        <div class="top">
            <div class="title">
                <h2>Últimas notícias</h2>
                <p>Acompanhe abaixo as últimas notícias do mercado.</p>
            </div>
            <div class="search">
                <form action="javascript:void(0);" method="get">
                    <input type="text" id="search-input" name="s" placeholder="Pesquise aqui...">
                    <button type="submit">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-search.svg" alt="Search">
                    </button>
                </form>
            </div>
        </div>
        <div class="group-more-news" id="search-results">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 12,
                    'paged'          => $paged,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();
                ?>
                <?php include(TEMPLATEPATH .'/includes/thumb-posts.php')?>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </div>
        <?php if ($query->max_num_pages > 1) : ?>
            <div class="controls">
                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'total'   => $query->max_num_pages,
                        'current' => $paged,
                        'prev_text' => '<img src="' . get_template_directory_uri() . '/img/icons/icon-angle-left.svg" alt="Previous">',
                        'next_text' => '<img src="' . get_template_directory_uri() . '/img/icons/icon-angle-right.svg" alt="Next">',
                        'type' => 'list',
                    ));
                    ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
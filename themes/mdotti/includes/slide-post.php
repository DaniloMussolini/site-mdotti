<div class="slide-post" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="caption">
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
    </div>
</div>
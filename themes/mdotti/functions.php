<?php 

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_theme_support('post-thumbnails');

// Search AJAX
function custom_ajax_search() {
    wp_enqueue_script(
        'ajax-search-script',
        get_template_directory_uri() . '/js/ajax-search.js',
        array('jquery'),
        null,
        true
    );

    wp_localize_script(
        'ajax-search-script',
        'ajaxSearch',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
        )
    );
}
add_action('wp_enqueue_scripts', 'custom_ajax_search');

// Endpoint Registros de Placa
function ajax_search_handler() {
    // Verifica se a busca foi enviada
    $search_query = isset($_POST['query']) ? sanitize_text_field($_POST['query']) : '';

    // Configura a query de busca
    $args = array(
        'posts_per_page' => 200,
        'post_type'      => 'post',
        'order'          => 'DESC',
        's'              => $search_query,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <?php include(TEMPLATEPATH .'/includes/thumb-posts.php')?>
            <?php
        }
    } else {
        echo '<p>Nenhum post encontrado.</p>';
    }

    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_ajax_search', 'ajax_search_handler');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search_handler');


// =========================================================================
// Enqueue dos assets da página Workstation
// (CSS principal do tema é carregado via <link> direto em header.php — por isso
//  o array de dependências fica vazio. JS roda no footer, antes do wp_footer.)
// =========================================================================
add_action( 'wp_enqueue_scripts', function () {

    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    // --- Página Workstation ---
    if ( is_page_template( 'page-workstation.php' ) ) {
        wp_enqueue_style(
            'mdotti-workstation',
            $theme_uri . '/css/workstation.css',
            array(),
            filemtime( $theme_path . '/css/workstation.css' )
        );
        wp_enqueue_script(
            'mdotti-workstation',
            $theme_uri . '/js/workstation.js',
            array(),
            filemtime( $theme_path . '/js/workstation.js' ),
            true
        );
    }

    // --- Modelos de Negócio (página interna + seção na Home) ---
    if ( is_page_template( 'page-modelos-de-negocio.php' ) || is_page_template( 'page-home.php' ) ) {
        wp_enqueue_style(
            'mdotti-modelos',
            $theme_uri . '/css/modelos.css',
            array(),
            filemtime( $theme_path . '/css/modelos.css' )
        );
    }

    // --- Página TPN (Trusted Partner Network) ---
    if ( is_page_template( 'page-tpn.php' ) ) {
        wp_enqueue_style(
            'mdotti-tpn',
            $theme_uri . '/css/tpn.css',
            array(),
            filemtime( $theme_path . '/css/tpn.css' )
        );
    }

    // --- Página ZBoox Cloud ---
    if ( is_page_template( 'page-zboox-cloud.php' ) ) {
        wp_enqueue_style(
            'mdotti-zboox-cloud',
            $theme_uri . '/css/zboox-cloud.css',
            array(),
            filemtime( $theme_path . '/css/zboox-cloud.css' )
        );
    }

    // --- Página ZBoox (produto — redesign 2026) ---
    if ( is_page_template( 'page-zboox.php' ) ) {
        wp_enqueue_style(
            'mdotti-zboox',
            $theme_uri . '/css/zboox.css',
            array(),
            filemtime( $theme_path . '/css/zboox.css' )
        );
    }

}, 20 );

?>

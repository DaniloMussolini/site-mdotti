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


// =========================================================================
// SEO on-page: meta description + Open Graph + Twitter Card
// (O site não usa plugin de SEO. Antes disso o tema não emitia nenhuma dessas
//  tags, então a meta descrição escrita nos artigos do blog ficava só no campo
//  excerpt e nunca chegava à página. Aqui o excerpt passa a virar a
//  <meta name="description">, sem mudar o fluxo de publicação.)
// =========================================================================

/**
 * Monta a descrição da tela atual, na ordem de preferência:
 * post/página -> excerpt manual; se vazio, início do conteúdo;
 * arquivo de categoria/tag -> descrição do termo;
 * home -> tagline do site (Configurações > Geral).
 * Busca e 404 não têm descrição (nada a indexar).
 *
 * @return string Texto puro, sem HTML, limitado a ~160 caracteres.
 */
function mdotti_meta_description() {

    $texto = '';

    if ( is_singular() ) {
        $post = get_queried_object();

        if ( $post instanceof WP_Post ) {
            // excerpt->post_excerpt e não get_the_excerpt(): evita o "[...]"
            // e o corte automático que o filtro do WordPress aplica.
            $texto = $post->post_excerpt;

            if ( '' === trim( $texto ) ) {
                $texto = wp_trim_words( strip_shortcodes( $post->post_content ), 40, '' );
            }
        }
    } elseif ( is_category() || is_tag() || is_tax() ) {
        $texto = term_description();
    } elseif ( is_home() || is_front_page() ) {
        $texto = get_bloginfo( 'description' );
    }

    // Normaliza: sem tags, sem entidades, sem quebras de linha nem espaço duplo.
    $texto = wp_strip_all_tags( $texto, true );
    $texto = html_entity_decode( $texto, ENT_QUOTES, 'UTF-8' );
    $texto = trim( preg_replace( '/\s+/u', ' ', $texto ) );

    // Corta em ~160 caracteres, em limite de palavra. wp_html_excerpt() é do
    // core: evita depender direto de mb_* (que exige a extensão mbstring).
    return wp_html_excerpt( $texto, 160, '…' );
}

/**
 * Imagem de compartilhamento: destacada do post; se não houver, a capa padrão
 * do blog que já existe no tema.
 *
 * @return string URL absoluta.
 */
function mdotti_meta_image() {

    if ( is_singular() ) {
        $imagem = get_the_post_thumbnail_url( get_queried_object_id(), 'full' );

        if ( $imagem ) {
            return $imagem;
        }
    }

    return get_template_directory_uri() . '/img/assets/thumb-blog.jpg';
}

/**
 * Emite as meta tags no <head>. Prioridade 1 para sair antes do resto do
 * wp_head e ficar no topo do bloco.
 */
function mdotti_seo_meta_tags() {

    // Busca e 404 não recebem descrição nem Open Graph.
    if ( is_search() || is_404() ) {
        return;
    }

    $descricao = mdotti_meta_description();
    $titulo    = wp_get_document_title();
    $imagem    = mdotti_meta_image();
    $tipo      = is_singular( 'post' ) ? 'article' : 'website';

    // URL canônica da tela. Explícita por tipo, para não arrastar query string
    // (ex.: ?v=1 usado para furar cache) nem quebrar em subdiretório.
    if ( is_singular() ) {
        $url = get_permalink();
    } elseif ( is_category() || is_tag() || is_tax() ) {
        $url = get_term_link( get_queried_object() );

        if ( is_wp_error( $url ) ) {
            $url = home_url( '/' );
        }
    } else {
        $url = home_url( '/' );
    }

    echo "\n    <!-- SEO / Open Graph (tema mdotti) -->\n";

    if ( '' !== $descricao ) {
        printf(
            '    <meta name="description" content="%s">' . "\n",
            esc_attr( $descricao )
        );
        printf(
            '    <meta property="og:description" content="%s">' . "\n",
            esc_attr( $descricao )
        );
        printf(
            '    <meta name="twitter:description" content="%s">' . "\n",
            esc_attr( $descricao )
        );
    }

    printf( '    <meta property="og:title" content="%s">' . "\n", esc_attr( $titulo ) );
    printf( '    <meta property="og:type" content="%s">' . "\n", esc_attr( $tipo ) );
    printf( '    <meta property="og:url" content="%s">' . "\n", esc_url( $url ) );
    printf( '    <meta property="og:site_name" content="%s">' . "\n", esc_attr( get_bloginfo( 'name' ) ) );
    printf( '    <meta property="og:locale" content="%s">' . "\n", esc_attr( 'pt_BR' ) );
    printf( '    <meta property="og:image" content="%s">' . "\n", esc_url( $imagem ) );

    printf( '    <meta name="twitter:card" content="%s">' . "\n", 'summary_large_image' );
    printf( '    <meta name="twitter:title" content="%s">' . "\n", esc_attr( $titulo ) );
    printf( '    <meta name="twitter:image" content="%s">' . "\n", esc_url( $imagem ) );

    if ( is_singular( 'post' ) ) {
        printf(
            '    <meta property="article:published_time" content="%s">' . "\n",
            esc_attr( get_the_date( DATE_W3C ) )
        );
    }
}
add_action( 'wp_head', 'mdotti_seo_meta_tags', 1 );

?>

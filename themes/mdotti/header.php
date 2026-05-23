<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="adopt-website-id" content="9c9e130e-6293-4b98-b671-786e9f445bf6" />
    <script src="//tag.goadopt.io/injector.js?website_code=9c9e130e-6293-4b98-b671-786e9f445bf6" 
    class="adopt-injector"></script>

    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2/dist/css/lightbox.min.css" rel="stylesheet" />

    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png">

    <!-- swipper slide -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- aos animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.min.css">

    <title>
        <?php wp_title( '|', true, 'right' ); ?>
        <?php bloginfo( 'name' ); ?>
    </title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>>

<header>
    <div class="container">
        <div class="logo">
            <a href="<?php bloginfo('wpurl')?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/assets/logo.svg" alt="Logo MDotti">
            </a>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="<?php bloginfo('wpurl')?>/#sobre">Sobre nós</a>
                </li>
                <li>
                    <a href="<?php bloginfo('wpurl')?>/#produtos">Produtos e Serviços</a>
                </li>
                <li>
                    <a href="<?php bloginfo('wpurl')?>/blog">Blog</a>
                </li>
                <li>
                    <a href="<?php bloginfo('wpurl')?>/#contato">Contato</a>
                </li>
            </ul>
        </div>
        <button class="btn-open-menu" id="js-btn-menu-mobile">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<div class="menu-responsive">
    <div class="overlay"></div>
    <aside>
        <div class="content">
            <div class="logo">
                <a href="index.html">
                    <img src="<?php echo get_template_directory_uri() ?>/img/assets/logo-white.png" alt="Logo M.Dotti">
                </a>
            </div>
            <div class="big-menu">
                <ul>
                    <h4>Menu</h4>
                    <li>
                        <a href="<?php bloginfo('wpurl')?>/#sobre">Sobre nós</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('wpurl')?>/#produtos">Produtos e Serviços</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('wpurl')?>/blog">Blog</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('wpurl')?>/#contato">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="small-menu">
                <ul>
                    <h4>Informações</h4>
                    <li>
                        <a href="<?php bloginfo('wpurl')?>/politica/">Política de Privacidade</a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</div>
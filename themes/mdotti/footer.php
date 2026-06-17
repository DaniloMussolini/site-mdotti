<div class="wpp">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B5511988665683">
        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-wpp.svg" alt="WhatsApp">
    </a>
</div>

<footer>
    <main class="container-full">
        <div class="container">
            <div class="main-foot">
                <div class="info">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/img/assets/logo-mdotti-white.svg" alt="Logo MDotti White">
                    </div>
                    <p style="margin-bottom: 32px">A MDotti Tecnologia combina expertise em TI e audiovisual para oferecer soluções acessíveis e completas, atendendo desde produtores independentes até grandes produções. Nossa missão é simplificar e democratizar a tecnologia para o mercado de pré e pós-produção.</p>
                    <img src="<?php echo get_template_directory_uri() ?>/img/assets/selo-seagate-reseller.png" alt="">
                </div>
                <div class="group-col">
                    <div class="col">
                        <h5>Sitemap</h5>
                        <ul>
                            <li>
                                <a href="<?php bloginfo('wpurl')?>/#sobre">Sobre Nós</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('wpurl')?>/#produtos">Produtos</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('wpurl')?>/blog">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Informações</h5>
                        <ul>
                            <li>
                                <a href="<?php bloginfo('wpurl')?>/politica">Política</a>
                            </li>
                            <!-- <li>
                                <a href="<?php bloginfo('wpurl')?>/termos">Termos</a>
                            </li> -->
                            <li>
                                <a href="<?php bloginfo('wpurl')?>/#contato">Contato</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col contact">
                        <h5>Contato</h5>
                        <ul>
                            <li>
                                <a href="#">Rua Milton Lodetti, 44 - Vila Leopoldina,<br> São Paulo - SP, 05303-080</a>
                            </li>
                            <li>
                                <a href="#">+55 (11) 98866-5683</a>
                            </li>
                            <li>
                                <a href="#">contato@mdotti.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="rights">
                    <a target="_blank" href="https://mvmt.com.br">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-mvmt.svg" alt="Website by mvmt.com.br">
                    </a>
                    <div class="content">
                        <strong>©<?php echo date('Y'); ?> MDotti.</strong>
                        <span>Todos os direitos reservados.</span>
                    </div>
                </div>
                <div class="social">
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/mdottitecnologia">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-fb.svg" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/company/mdotti-tecnologia/">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-linkedin.svg" alt="Linkedin">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/mdottitec/">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-instagram.svg" alt="Instagram">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.youtube.com/@MDottiTecnologia">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-youtube.svg" alt="YouTube">
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-wpp.svg" alt="WhatsApp">
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </main>
</footer>

<!-- swipper slide -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- aos animate -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdn.jsdelivr.net/npm/lightbox2@2/dist/js/lightbox-plus-jquery.min.js"></script>

<script>
    // inicializar aos animate
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/slides.js"></script>

<?php wp_footer(); ?>

</body>

</html>
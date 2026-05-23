<section class="s-news">
    <main class="container-full">
        <video src="<?php echo get_template_directory_uri() ?>/video/bg-mdotti-hero.mp4" autoplay loop playsinline muted></video>
        <div class="container">
            <div class="text">
                <div class="icon" data-aos="zoom-in">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-send.svg" alt="Send">
                </div>
                <h5>Tudo o que você precisa saber sobre tecnologia no audiovisual, toda semana, na sua caixa de entrada.</h5>
                <p>Cadastre-se na nossa newsletter e receba conteúdo exclusivo sobre workflow de vídeo, tecnologias em armazenamento, infraestrutura e workstations customizadas.</p>
            </div>
            <div class="news">
                <form action="<?php echo get_template_directory_uri() ?>/mail/email-news.php" method="POST">
                    <div class="group">
                        <input type="text" placeholder="Nome" name="name-news" required>
                    </div>
                    <div class="group">
                        <input type="text" placeholder="Digite seu melhor e-mail" name="mail-news" required>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lf6oEYrAAAAAJvBxQvuJoOYqM_2eWi03PNc2yv1" data-action="LOGIN"></div>
                    <button id="send" class="btn-primary purple">Enviar</button>
                </form>
            </div>
        </div>
    </main>
</section>
<section class="s-contact" id="contato">
    <div class="container">
        <div class="top">
            <div class="title">
                <h2>Vamos conversar?</h2>
                <p>Contamos com especialistas que te ajudam a encontrar a melhor solução para o seu negócio. Entre
                    em contato e fale com a gente!</p>
            </div>
        </div>
        <main>

            <form class="form-mdotti" action="<?php echo get_template_directory_uri() ?>/mail/email-contato.php" method="post">
                <div class="input">
                    <div class="group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required autocomplete="name" aria-required="true">
                    </div>
                    <div class="group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu melhor e-mail" required autocomplete="email" aria-required="true">
                    </div>
                    <div class="group">
                        <label for="tel">Telefone</label>
                        <input type="tel" id="tel" name="tel" placeholder="(00) 00000-0000" required autocomplete="tel" aria-required="true">
                    </div>
                    <div class="group">
                        <label for="empresa">Empresa</label>
                        <input type="text" id="empresa" name="empresa" placeholder="Digite o nome da sua empresa" required autocomplete="organization" aria-required="true">
                    </div>
                    <div class="group">
                        <label for="mensagem">Mensagem</label>
                        <input type="text" placeholder="Digite sua mensagem..." id="mensagem" name="mensagem" required aria-required="true">
                    </div>
                    <div class="group">
                        <div class="g-recaptcha" data-sitekey="6Lf6oEYrAAAAAJvBxQvuJoOYqM_2eWi03PNc2yv1" data-action="LOGIN"></div>
                    </div>
                </div>
                <div class="cta">
                    <button type="submit" class="btn-primary purple">Entre em contato</button>
                </div>
            </form>
            
            <div class="bn-video">
                <video src="<?php echo get_template_directory_uri() ?>/video/bn-video-mdotti.mp4" autoplay loop playsinline muted></video>
                <div class="caption" data-aos="zoom-in">
                    <div class="icon" data-aos="zoom-in">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-youtube.svg" alt="Youtube">
                    </div>
                    <h2>Acompanhe nosso conteúdo no <span>Youtube</span>!</h2>
                    <div class="cta">
                        <a target="_blank" href="https://www.youtube.com/c/MDottiTecnologia" class="btn-primary purple">Acessar canal do Youtube</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>
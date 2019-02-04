<?php get_header(); ?>

    <section class="header-internal">
        <h1>Notícias</h1>
    </section>

    <section class="blog-home">
        <div class="container medium">
            <div class="filter">
                <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt signiferumque cu per. An inermis voluptaria vel, ea nec veri aliquip adversarium. Te mei lucilius elaboraret instructior, altera platonem scriptorem mel et. Sea no utamur inimicus. </p>
                <form action="#">
                    <input type="text" name="s" placeholder="Pesquisar...">
                    <button>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/lupa.svg" alt="Pesquisar">
                    </button>
                </form>
            </div>
            <div class="grid-internal">
                <div class="card-blog">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="#">
                    </figure>
                    <div class="content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt.</p>
                        <a href="#">Saiba mais ></a>
                    </div>
                </div>
                <div class="card-blog">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="#">
                    </figure>
                    <div class="content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt.</p>
                        <a href="#">Saiba mais ></a>
                    </div>
                </div>
                <div class="card-blog">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="#">
                    </figure>
                    <div class="content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt.</p>
                        <a href="#">Saiba mais ></a>
                    </div>
                </div>
                <div class="card-blog">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="#">
                    </figure>
                    <div class="content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt.</p>
                        <a href="#">Saiba mais ></a>
                    </div>
                </div>
                <div class="card-blog">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="#">
                    </figure>
                    <div class="content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt.</p>
                        <a href="#">Saiba mais ></a>
                    </div>
                </div>
                <div class="card-blog">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="#">
                    </figure>
                    <div class="content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt.</p>
                        <a href="#">Saiba mais ></a>
                    </div>
                </div>
                <div class="card-blog">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="#">
                    </figure>
                    <div class="content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt.</p>
                        <a href="#">Saiba mais ></a>
                    </div>
                </div>
                <div class="card-blog">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="#">
                    </figure>
                    <div class="content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt.</p>
                        <a href="#">Saiba mais ></a>
                    </div>
                </div>
                <div class="card-blog">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="#">
                    </figure>
                    <div class="content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, an usu etiam dissentiet, purto reprehendunt.</p>
                        <a href="#">Saiba mais ></a>
                    </div>
                </div>
            </div>
            <a href="#" class="button">Ver mais</a>
        </div>
    </section>

    <section class="contact">
        <h2>Contato</h2>
        <form action="#">
            <input type="text" name="nome" placeholder="Nome">
            <input type="email" name="email" placeholder="E-mail" class="half">
            <input type="email" name="assunto" placeholder="Assunto" class="half">
            <textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>
            <div class="submit">
                <button class="button">Enviar</button>
            </div>
        </form>
    </section>

<?php get_footer(); ?>
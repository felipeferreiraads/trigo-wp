    <section class="contact <?php echo !is_home() ? 'internal' : '';?>" id="contato">
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

    <footer>
        <div class="container">
            <div class="grid">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-white.png" alt="Trigo e Farinhas">
                </div>
                <div class="menu">
                    <nav>
                        <h3>Empresa</h3>
                        <a href="#">Sobre nós</a>
                        <a href="#">Contato</a>
                    </nav>
                    <nav>
                        <h3>Produtos</h3>
                        <a href="#">Boletins</a>
                        <a href="#">Cursos</a>
                        <a href="#">Palestras</a>
                    </nav>
                    <nav>
                        <h3>Notícias</h3>
                        <a href="#">Blog</a>
                    </nav>
                </div>
            </div>
            <div class="bottom">
                <p>&copy; Copyright 2018 - Trigo e Farinhas | Todos os direitos reservados
            </div>
        </div>
    </footer>
    
    <script src="<?php echo get_template_directory_uri();?>/assets/js/bundle.min.js"></script>
</body>

</html> 
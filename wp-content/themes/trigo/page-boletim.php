<?php
/*
    Template Name: Boletim
*/
get_header(); ?>

    <section class="header-internal">
        <h1>Boletim Trigo</h1>
    </section>

    <section class="content">
        <div class="container">
            <div class="icon-newsletter">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-trigo.svg" alt="Boletim Trigo">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna. Massa tincidunt dui ut ornare lectus sit amet est placerat. Ac felis donec et odio pellentesque diam volutpat. Tincidunt eget nullam non nisi est. Eget mi proin sed libero enim sed faucibus turpis. Platea dictumst quisque sagittis purus sit amet volutpat. Auctor augue mauris augue neque.</p>
                <p>Malesuada bibendum arcu vitae elementum curabitur vitae nunc. Consequat id porta nibh venenatis cras. Magna fringilla urna porttitor rhoncus dolor. Mauris nunc congue nisi vitae suscipit. Velit euismod in pellentesque massa placerat duis ultricies lacus sed. Pharetra sit amet aliquam id diam. Massa massa ultricies mi quis hendrerit. Amet nisl purus in mollis nunc sed id semper risus. Lobortis elementum nibh tellus molestie. Id donec ultrices tincidunt arcu non sodales neque sodales. Augue interdum velit euismod in. Cursus euismod quis viverra nibh cras pulvinar mattis nunc.</p>
            </div>
            <a href="#" class="button sample">Veja uma amostra</a>
        </div>
    </section>

    <section class="newsletter-plans">
        <h2>Planos</h2>
        <div class="grid-switch">
            <span>Mensal</span>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
            <span>Anual <i>(economize 17%)</i></span>
        </div>
        <div class="grid">
            <div class="card-newsletter internal">
                <div class="content">
                    <h3 class="title-news">Assinatura Simples</h3>
                    <ul>
                        <li>Boletim diário</li>
                        <li>Um assinante</li>
                    </ul>
                    <span class="price">R$ 210 / mês</span>
                </div>
                <a href="#"">Assinar</a>
            </div>
            <div class="card-newsletter internal">
                <div class="content">
                    <h3 class="title-news">Assinatura Corporativa</h3>
                    <ul>
                        <li>Boletim diário</li>
                        <li>Cinco assinante</li>
                        <li>Palestra anual</li>
                    </ul>
                    <span class="price">R$ 410 / mês</span>
                </div>
                <a href="#"">Assinar</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
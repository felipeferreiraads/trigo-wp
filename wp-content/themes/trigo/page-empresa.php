<?php get_header(); the_post(); ?>

    <section class="header-internal">
        <h1>Empresa</h1>
    </section>

    <section class="content">
        <div class="container">
            <h2>Sobre nós</h2>
            <div class="enterprise">
                <div class="left">
                    <?php the_content(); ?>
                </div>
                <figure>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="Empresa">
                </figure>
            </div>

            <div class="cards-enterprise">
                <div class="card-enterprise">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-trigo.svg" alt="Missão">
                    </figure>
                    <h3>Missão</h3>
                    <p><?php the_field('missao'); ?></p>
                </div>
                <div class="card-enterprise">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-trigo.svg" alt="Missão">
                    </figure>
                    <h3>Visão</h3>
                    <p><?php the_field('visao'); ?></p>
                </div>
                <div class="card-enterprise">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-trigo.svg" alt="Missão">
                    </figure>
                    <h3>Valores</h3>
                    <p><?php the_field('valores'); ?></p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
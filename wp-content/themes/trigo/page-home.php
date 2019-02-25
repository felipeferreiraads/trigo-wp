<?php
get_header();  
the_post(); 

$posts = new WP_Query(['post_type' => 'posts', 'posts_per_page' => 3]);
?>

    <section class="banner" style="background-image: <?php the_field('banner'); ?>">
        <div class="overlay"></div>
        <div class="container">
            <div class="grid">
                <h1><?php the_field('titulo_do_banner'); ?></h1>
                <p><?php the_field('texto_do_banner'); ?></p>
            </div>
        </div>
    </section>

    <section class="newsletters">
        <h2>Conheça nossos boletins</h2>
        <div class="container medium">
            <div class="grid">
            <?php while(have_rows('boletins')) : the_row(); ?>
                <div class="card-newsletter">
                    <div class="content">
                        <figure>
                            <img src="<?php the_sub_field('boletim_imagem'); ?>" alt="<?php the_sub_field('boletim_nome'); ?>">
                        </figure>
                        <h3><?php the_sub_field('boletim_nome'); ?></h3>
                        <p><?php the_sub_field('boletim_texto'); ?></p>
                    </div>
                    <a href="<?php the_sub_field('boletim_link'); ?>"">Conheça</a>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="section-home">
        <div class="grid">
            <div class="image">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="Trigo">
                <div class="overlay"></div>
            </div>
            <div class="text-section">
                <h2>Cursos</h2>
                <?php the_field('texto_cursos'); ?>
                <a href="<?php echo site_url('/cursos/'); ?>" class="button">Saiba mais</a>
            </div>
        </div>
    </section>

    <section class="section-home">
        <div class="grid reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/image.jpg" alt="Trigo">
                <div class="overlay"></div>
            </div>
            <div class="text-section gradient">
                <h2>Palestras</h2>
                <?php the_field('texto_palestras'); ?>
                <a href="<?php echo site_url('/palestras/'); ?>" class="button white">Saiba mais</a>
            </div>
        </div>
    </section>

    <section class="blog-home">
        <h2>Notícias</h2>
        <div class="container medium">
            <div class="grid">
            <?php while($posts->have_posts()): $posts->the_post(); ?>
                <div class="card-blog">
                    <figure>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php echo get_the_title(); ?>">
                    </figure>
                    <div class="content">
                        <h3><?php echo get_the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink();?>">Saiba mais ></a>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
            <a href="<?php echo site_url('/noticias/'); ?>" class="button">Veja mais</a>
        </div>
    </section>

<?php get_footer(); ?>
<?php get_header() ?>
<main>
    <div class="home">
        <div class="title"><?php bloginfo('name'); ?></div>
        <div class="separation"></div>
        <div class="descrip">Développeur Web et Web Mobile</div>
    </div>
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article>
                <div class="separ"></div>
                <div class="band"> </div>
                <div class="post" >
                    <!-- Pour les images de l'article -->
                    <h1> <?php the_title(); ?> </h1> <!-- Pour le titre de l'article-->
                    <?php the_post_thumbnail('post-thumbnail', ['id' => 'monImage']); ?>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
            <!-- Pour le contenu de l'article -->
            
            <?php endwhile ?>
            <?php echo do_shortcode("[affGithubData]"); ?>
    <?php else : ?>
        <h1>Pas d'articles</h1>
    <?php endif; ?>
</main>
<?php get_footer() ?>
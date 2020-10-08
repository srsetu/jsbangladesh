<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 style="text-align: center"><?php the_title() ?></h2>
                    </header>
                    <div class="entry-content">
                        <p><?php the_content(); ?></p>
                    </div>
                </article>
            <?php endwhile; else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>

            <p>We are on: front-page.php</p>
        </main>

    </div>
<?php get_sidebar() ?>

<?php get_footer(); ?>
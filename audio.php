<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2><?php the_title() ?></h2>
                        <p>Our custom attachment page</p>
                    </header>
                    <div class="entry-content">
                        <p><?php
                            $location = 'http://jsbangladesh.local/wp-content/uploads/2013/03/Eddy-Need-Remix.mp3';
                            echo do_shortcode('[audio mp3=' . $location . ']');
                            ?></p>
                    </div>

                </article>
            <?php endwhile; else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>

            <p>We are on: audio.php</p>
        </main>
    </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
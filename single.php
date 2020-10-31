<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content'); ?>
            <?php endwhile; else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>

            <p>We are on: single.php</p>
            <h3>
                <?php
                if (get_field('location')) {
                    echo "Location: " . get_field('location') . "<br>";
                }
                if (get_field('anything_you_want_to_say')) {
                    echo "My Words: " . get_field('anything_you_want_to_say') . "<br>";
                }
                if (get_field('are_you_single')) {
                    the_field('are_you_single');
                }

                ?>
            </h3>
        </main>
    </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
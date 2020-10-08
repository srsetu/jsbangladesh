<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <h2 class="category-title"><?php the_archive_title(); ?></h2>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a>
                    </header>
                    <div class="entry-content">
                        <p><?php the_content(); ?></p>
                    </div>
                </article>
			<?php endwhile; else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>

            <p>We are on: category-alignment.php</p>
        </main>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
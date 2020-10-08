<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a>
        <div class="byline">
			<?php esc_html_e( 'Author: ', 'jsbangladesh' ) ?><?php the_author_posts_link(); ?>
        </div>
    </header>
    <div class="entry-content">
        <p><?php the_excerpt(); ?></p>
    </div>
</article>
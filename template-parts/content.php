<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2><?php the_title() ?></h2>
        <div class="byline">
			<?php esc_html_e( 'Author: ', 'jsbangladesh' ) ?><?php the_author() ?>
        </div>
    </header>
    <div class="entry-content">
        <p><?php the_content(); ?></p>
    </div>

	<?php
	if ( comments_open() ) {
		comments_template();
	}
	?>

</article>
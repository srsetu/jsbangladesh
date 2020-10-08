<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2><?php the_title() ?></h2>
    </header>
    <div class="entry-content">
        <p><?php the_content(); ?></p>
    </div>
</article>
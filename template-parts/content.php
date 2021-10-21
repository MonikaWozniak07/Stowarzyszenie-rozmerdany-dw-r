<?php
/**
 * Template part for displaying posts
 */
?>

<div class="container">
    template-parts/content.php

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( is_singular() ) : ?>
        <?php the_title( '<h1>', '</h1>' ); ?>
        <?php else : ?>
        <?php the_title( sprintf( '<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php endif; ?>

        <?php /*<?php twenty_twenty_one_post_thumbnail(); ?> */ ?>

        <div class="entry-content">
            <?php
                the_content();
            ?>
        </div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->
</div>
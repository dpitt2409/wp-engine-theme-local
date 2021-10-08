<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marketedge
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section>
        <header class="entry-header">
            <div class="container">
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php
                    marketedge_posted_on();
                    marketedge_posted_by();
                    ?>
                </div><!-- .entry-meta -->
                <?php endif; ?>
            </div>
        </header><!-- .entry-header -->
    </section>
    <section>
        <div class="container">
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        </div>
    </section>
	<footer class="entry-footer">
		<?php marketedge_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

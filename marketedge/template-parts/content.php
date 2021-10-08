<?php
/**
 * Template part for displaying posts
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
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;

                if ( 'post' === get_post_type() ) :
                    ?>
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
            <div class="entry-content">
	            <?php marketedge_post_thumbnail(); ?>
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'marketedge' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marketedge' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->
        </div>
    </section>

	<footer class="entry-footer">
        <div class="container">
		    <?php marketedge_entry_footer(); ?>
        </div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
/**
 * Template Name: Resource
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <section>
                    <header class="entry-header">
                        <div class="container">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </div>
                    </header><!-- .entry-header -->
                </section>
                <section class="resource-content">
                    <div class="container">
                        <div class="entry-content">
                            <?php
                            the_content();

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eventual' ),
                                    'after'  => '</div>',
                                )
                            );
                            ?>
                        </div><!-- .entry-content -->
                    </div>
                </section>
            </article>
            <?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();

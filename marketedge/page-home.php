<?php
/**
 * Template Name: Home
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
            if(get_the_content()):
                ?>
                <section class="entry-content">
                    <div class="container">
                        <?php
                        the_content();
                        ?>
                    </div>
                </section>
                <?php
            endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();

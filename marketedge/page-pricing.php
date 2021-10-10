<?php
/**
 * Template Name: Pricing
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

            $hero_background = get_field('hero_background');
            $hero_heading = get_field('hero_heading');
            $hero_content = get_field('hero_content');
            $hero_cta = get_field('hero_cta');
            if( $hero_background ): 
                ?>
                <section class="hero" style="background: url(<?php echo $hero_background['url'];?>);background-repeat:no-repeat;background-position:center;background-size:cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <?php if($hero_heading):?>
                                    <h1><?php echo $hero_heading;?></h1>
                                <?php endif;?>
                                <?php if($hero_content):?>
                                    <p><?php echo $hero_content;?></p>
                                <?php endif;?>
                                <?php if($hero_cta):?>
                                    <a class="btn primary" href="<?php echo $hero_cta['url'];?>" target="<?php echo $hero_cta['url'];?>"><?php echo $hero_cta['title'];?></a>
                                <?php endif;?>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </section>
                <?php
            endif;

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

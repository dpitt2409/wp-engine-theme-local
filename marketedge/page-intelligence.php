<?php
/**
 * Template Name: Intelligence
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
                            <div class="col-md-6"></div>
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
                        </div>
                    </div>
                </section>
                <?php
            endif;

            if( have_rows('icons') ): 
                ?>
                <section class="icons">
                    <div class="container">
                        <?php 
                        while(have_rows('icons')): the_row();
                            $icon_image = get_sub_field('icon');
                            $icon_heading = get_sub_field('heading');
                            $icon_content = get_sub_field('content');
                            ?>
                            <div class="icon row">
                                <div class="icon-image col-lg-6">
                                    <?php if($icon_image): ?>
                                        <img src="<?php echo $icon_image['url'];?>" alt="<?php echo $icon_image['alt'];?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="icon-content col-lg-6">
                                    <?php if($icon_heading): ?>
                                        <h2><span class="slash">/</span> <?php echo $icon_heading;?></h2>
                                    <?php endif; ?>
                                    <?php if($icon_content): ?>
                                        <p><?php echo $icon_content;?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php 
                        endwhile;
                        ?>
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

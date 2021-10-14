<?php
/**
 * Template Name: Company
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
                            <div class="col text-center">
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

            $impact_background = get_field('impact_background');
            $impact_heading = get_field('impact_heading');
            $impact_content = get_field('impact_content');
            $impact_image = get_field('impact_image');
            if( $impact_background ): 
                ?>
                <section class="impact" style="background: url(<?php echo $impact_background['url'];?>);background-repeat:no-repeat;background-position:center;background-size:cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 text-right impact-content">
                                <?php if($impact_heading):?>
                                    <h2><span class="slash">/</span> <?php echo $impact_heading;?></h2>
                                <?php endif;?>
                                <?php if($impact_content):?>
                                    <p><?php echo $impact_content;?></p>
                                <?php endif;?>
                            </div>
                            <div class="col-lg-6">
                                <?php if($impact_image):?>
                                    <img src="<?php echo $impact_image['url'];?>" alt="<?php echo $impact_image['alt'];?>" />
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            endif;

            if( have_rows('team_members') ): 
                ?>
                <section class="team-members">
                    <div class="container">
                        <?php 
                        while(have_rows('team_members')): the_row();
                            $members_heading = get_sub_field('members_heading');
                            ?>
                            <div class="text-center">
                                <?php if($members_heading): ?>
                                    <h2><?php echo $members_heading;?></h2>
                                <?php endif; ?>
                            </div>
                            <?php 
                            if(have_rows('team_member')):
                                ?>
                                <div class="row">
                                    <?php
                                    while(have_rows('team_member')): the_row();
                                        $image = get_sub_field('image');
                                        $name = get_sub_field('name');
                                        $title = get_sub_field('title');
                                        ?>
                                        <div class="col-lg-3 col-md-6 team-member">
                                            <?php if($image): ?>
                                                <img src="<?php echo $image['url'];?>" alt="<?php echo $name.' '.$title;?>" />
                                            <?php endif; ?>
                                            <?php if($name): ?>
                                                <h2><?php echo $name;?></h2>
                                            <?php endif; ?>
                                            <?php if($title): ?>
                                                <p><?php echo $title;?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php
                                    endwhile;
                                    ?>
                                </div>
                                <?php
                            endif;
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

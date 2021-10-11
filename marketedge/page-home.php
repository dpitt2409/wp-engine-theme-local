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

            $hero_background = get_field('hero_background');
            $hero_heading = get_field('hero_heading');
            $hero_content = get_field('hero_content');
            $hero_cta = get_field('hero_cta');
            if( $hero_background ): 
            ?>
                <section class="hero" style="background: url(<?php echo $hero_background['url'];?>);background-repeat:no-repeat;background-position:center;background-size:cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col">
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

            $accelerate_heading = get_field('accelerate_heading');
            $accelerate_content = get_field('accelerate_content');
            $accelerate_cta = get_field('accelerate_cta');
            if( $accelerate_heading ):
                ?>
                <section class="accelerate">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <?php if($accelerate_heading):?>
                                    <h2><?php echo $accelerate_heading;?></h2>
                                <?php endif;?>
                                <?php if($accelerate_content):?>
                                    <p><?php echo $accelerate_content;?></p>
                                <?php endif;?>
                                <?php if($accelerate_cta):?>
                                    <a class="btn primary" href="<?php echo $accelerate_cta['url'];?>" target="<?php echo $accelerate_cta['url'];?>"><?php echo $accelerate_cta['title'];?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            endif;

            if(have_rows('results')):
                $results_heading = get_field('results_heading');
                ?>
                <section class="results">
                    <div class="container">
                        <?php if($results_heading):?>
                            <h2 class="text-center"><?php echo $results_heading;?></h2>
                        <?php endif;?>
                        <div class="results row">
                            <?php
                            while(have_rows('results')): the_row();
                                $result_image = get_sub_field('image');
                                $result_heading = get_sub_field('heading');
                                $result_content = get_sub_field('content');
                                ?>
                                <div class="result col-lg-3 col-md-6">
                                    <div class="result-image">
                                        <img src="<?php echo $result_image['url'];?>" alt="<?php echo $result_image['alt'];?>" />
                                    </div>
                                    <?php if($result_heading):?>
                                        <h2><span class="slash">/</span> <?php echo $result_heading;?></h2>
                                    <?php endif;?>
                                    <?php if($result_content):?>
                                        <p><?php echo $result_content;?></p>
                                    <?php endif;?>
                                </div>
                                <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                </section>
                <?php
            endif;

            $data_background = get_field('data_background');
            $data_heading = get_field('data_heading');
            $data_content = get_field('data_content');
            if( $data_background ):
                ?>
                <section class="data" style="background: url(<?php echo $data_background['url'];?>);background-repeat:no-repeat;background-position:center top;background-size:cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <?php if($data_heading):?>
                                    <h2><?php echo $data_heading;?></h2>
                                <?php endif;?>
                                <?php if($data_content):?>
                                    <p><?php echo $data_content;?></p>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            endif;

            if(have_rows('companies_logos')):
                $companies_headline = get_field('companies_headline');
                ?>
                <section class="companies">
                    <div class="container">
                        <?php if($companies_headline):?>
                            <h2 class="text-center"><?php echo $companies_headline;?></h2>
                        <?php endif;?>
                        <div class="companies row">
                            <?php
                            while(have_rows('companies_logos')): the_row();
                                $company_image = get_sub_field('image');
                                ?>
                                <div class="company col-lg-3 col-md-6">
                                    <div class="company-image">
                                        <img src="<?php echo $company_image['url'];?>" alt="<?php echo $company_image['alt'];?>" />
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            ?>
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

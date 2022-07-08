<?php 
/**
 * Block Name: team
 */

// create id attribute for specific styling
$classes = 'team';
$id = 'team_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
$heading = get_field('heading');
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">  
    <div class="container">
        <?php if($heading): ?>
            <div class="row">
                <div class="col-12 text-center">
                    <h2><?php echo $heading;?></h2>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php 
            if(have_rows('team')):
                while(have_rows('team')): the_row();
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    $company_position = get_sub_field('company_position');
                    ?>
                    <div class="col-md-6 col-lg-3 team-item">
                        <?php
                        if($image): 
                            ?>
                            <div class="team-image">
                                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" />
                            </div>
                            <?php 
                        endif;
                        if($name):
                            ?>
                            <h2><?php echo $name;?></h2>
                            <?php
                        endif;
                        if($company_position):
                            ?>
                            <p><?php echo $company_position;?></p>
                            <?php 
                        endif;

                        if(have_rows('social_links')):
                            ?>
                            <div class="social">
                            <?php
                            while(have_rows('social_links')): the_row();
                                $social_url = get_sub_field('url');
                                $social_icon_svg = get_sub_field('social_icon_svg');
                                if($social_url && $social_icon_svg):
                                    ?>
                                    <a href="<?php echo $social_url;?>" target="_blank"><?php echo $social_icon_svg;?></a>
                                    <?php
                                endif;
                            endwhile;
                            ?>
                            </div>
                            <?php
                        endif;
                        ?>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
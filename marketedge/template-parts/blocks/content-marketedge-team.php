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
                    <div class="col-md-3 team-item">
                        <?php
                        if($image): 
                            ?>
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" />
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
                        ?>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
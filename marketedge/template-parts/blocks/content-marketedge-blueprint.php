<?php 
/**
 * Block Name: Blueprint
 */

// create id attribute for specific styling
$classes = 'blueprints';
$id = 'blueprints_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}

?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">  
    <div class="container">
        <div class="row">
            <?php 
            if(have_rows('blueprints')):
                while(have_rows('blueprints')): the_row();
                    $icon = get_sub_field('icon');
                    $heading = get_sub_field('heading');
                    $content = get_sub_field('content');
                    ?>
                    <div class="col-md-4 blueprint">
                        <?php
                        if($icon): 
                            ?>
                            <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>" />
                            <?php 
                        endif;
                        if($heading):
                            ?>
                            <h2><?php echo $heading;?></h2>
                            <?php
                        endif;
                        if($content):
                            ?>
                            <p><?php echo $content;?></p>
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
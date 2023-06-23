<?php 
/**
 * Block Name: Simple Hero
 */

// create id attribute for specific styling
$classes = 'hero simple-hero';
$id = 'hero_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
$background_style = get_field('background_style');
$background_image = get_field('background_image');
$background_color = get_field('background_color');
$overlay_image = get_field('overlay_image');

$has_overlay = '';
$column_class = 'col-12';
if($overlay_image):
    $has_overlay = ' has-overlay';
    $column_class = 'col-md-6';
endif;


$heading = get_field('heading');
$content = get_field('content');
$cta = get_field('cta');

$tags = get_field('tags');
$tagsArray = explode(',', $tags);
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">  
    <div class="container">
        <div class="simple-hero-bg <?php echo $background_style; echo $has_overlay;?>" style="background-color: <?php echo $background_color;?>;background-image:url(<?php echo $background_image['url'];?>);background-size:cover;background-repeat:no-repeat;background-position: center;">
            <div class="row">
                <div class="<?php echo $column_class;?>">
                    <?php if($heading): ?>
                        <div class="hero-shape"></div>
                        <h1><?php echo $heading;?></h1>
                    <?php endif; ?>
                    <?php if($content): ?>
                        <p><?php echo $content;?></p>
                    <?php endif; ?>
                    <?php if($cta): ?>
                        <a class="btn btn-primary" href="<?php echo $cta['url'];?>" target="<?php echo $cta['target'];?>"><?php echo $cta['title'];?></a>
                    <?php endif; ?>

                    <div class="tags">
                        <?php if($tags): ?>
                            <?php foreach($tagsArray as $key => $value)
                            { ?>
                            <p class="tag"> <?php echo $value ?></p>
                            <?php 
                            }
                        endif; ?>
                    </div>
                </div>
                <?php if($overlay_image): ?>
                    <div class="<?php echo $column_class;?>">
                        <img class="overlay-image" src="<?php echo $overlay_image['url'];?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
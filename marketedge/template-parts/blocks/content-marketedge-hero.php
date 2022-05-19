<?php 
/**
 * Block Name: Hero
 */

// create id attribute for specific styling
$classes = 'hero large-hero';
$id = 'hero_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}

$background_image = get_field('background_image');
$background_color = get_field('background_color');
$overlay_image = get_field('overlay_image');
$heading = get_field('heading');
$content = get_field('content');
$cta = get_field('cta');
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>" style="background-color: <?php echo $background_color;?>;background-image:url(<?php echo $background_image['url'];?>);background-size:cover;background-repeat:no-repeat;background-position: center;">  
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php if($heading): ?>
                    <h1><?php echo $heading;?></h1>
                <?php endif; ?>
                <?php if($content): ?>
                    <p><?php echo $content;?></p>
                <?php endif; ?>
                <?php if($cta): ?>
                    <a class="btn btn-primary" href="<?php echo $cta['url'];?>" target="<?php echo $cta['target'];?>"><?php echo $cta['title'];?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php if($overlay_image): ?>
    <img class="overlay-image" src="<?php echo $overlay_image['url'];?>" alt="<?php echo $overlay_image['alt'];?>" />
<?php endif; ?>  
</section>
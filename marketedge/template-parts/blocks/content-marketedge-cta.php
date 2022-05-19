<?php 
/**
 * Block Name: CTA
 */

// create id attribute for specific styling
$classes = 'cta';
$id = 'cta_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
$background_image = get_field('background_image');
$background_color = get_field('background_color');
$heading = get_field('heading');
$content = get_field('content');
$cta = get_field('cta');
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">  
    <div class="container">
        <div class="cta-bg" style="background-color: <?php echo $background_color;?>;background-image: url(<?php echo $background_image['url'];?>);background-repeat:no-repeat;background-position: center;background-size: cover;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="cta-content">
                        <?php if($heading): ?>
                            <h2><?php echo $heading;?></h2>
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
        </div>
    </div>
</section>
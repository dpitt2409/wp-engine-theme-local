<?php 
/**
 * Block Name: Two Up
 */

// create id attribute for specific styling
$classes = 'twoup';
$id = 'twoup_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}

$image = get_field('two_up_image');
$image_position = get_field('two_up_image_position');
$heading = get_field('two_up_heading');
$content = get_field('two_up_content');
$cta = get_field('two_up_cta');
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">  
    <div class="container">
        <div class="twoup-bg <?php echo $image_position;?>">
            <div class="row">
                <div class="col-md-6 twoup-image">
                    <?php if($image): ?>
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 twoup-content">
                    <?php if($heading): ?>
                        <h2><?php echo $heading;?></h2>
                    <?php endif; ?>
                    <?php if($content): ?>
                        <p><?php echo $content;?></p>
                    <?php endif; ?>
                    <?php if($cta): ?>
                        <a class="btn btn-secondary" href="<?php echo $cta['url'];?>" target="<?php echo $cta['target'];?>"><?php echo $cta['title'];?>  <span>→</span></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
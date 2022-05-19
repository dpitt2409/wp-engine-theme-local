<?php 
/**
 * Block Name: Testimonial
 */

// create id attribute for specific styling
$classes = 'testimonial';
$id = 'testimonial_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}

$image = get_field('testimonial_image');
$quote = get_field('testimonial_quote');
$source = get_field('testimonial_source');
$cta = get_field('testimonial_cta');
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">  
    <div class="container">
        <div class="row">
            <div class="col-md-4 testimonial-image">
                <?php if($image): ?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
                <?php endif; ?>
            </div>
            <div class="col-md-8">
                <?php if($quote): ?>
                    <h2><q><?php echo $quote;?></q></h2>
                <?php endif; ?>
                <?php if($source): ?>
                    <p><?php echo $source;?></p>
                <?php endif; ?>
                <?php if($cta): ?>
                    <a class="btn btn-secondary" href="<?php echo $cta['url'];?>" target="<?php echo $cta['target'];?>"><?php echo $cta['title'];?> <span>→</span></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php 
/**
 * Block Name: Simple Hero
 */

// create id attribute for specific styling
$classes = 'contentform';
$id = 'contentform_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
$content = get_field('content');
$form_embed = get_field('form_embed');
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">  
    <div class="container">
        <div class="row">
            <div class="col-lg-6 content">
                <?php if($content): ?>
                    <p><?php echo $content;?></p>
                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php if($form_embed): ?>
                    <div class="embed-form">
                        <?php echo $form_embed;?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
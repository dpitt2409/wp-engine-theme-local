<?php 
/**
 * Block Name: Simple Hero
 */

// create id attribute for specific styling
$classes = 'narrowtextblock';
$id = 'narrowtextblock_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
$content = get_field('content');
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">  
    <div class="container">
        <div class="col">
            <?php echo $content;?>
        </div>
    </div>
</section>
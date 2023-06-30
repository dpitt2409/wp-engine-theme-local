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


// Only show tags on article posts
$tagsArray = has_block('acf/marketedge-article') ? get_the_tags() : null;

$date = get_the_date('l, F j, Y');

$readTime = get_field('length');
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

                    <div class="article-meta">
                        <?php if($date): ?>    
                            <span class="article-meta__date"><?php echo $date;?></span>    
                        <?php endif; ?>

                        <?php if($readTime): ?>
                            <span>| <?php echo $readTime;?> min</span>
                        <?php endif; ?>
                    </div>

                    <div class="tags">
                        <?php if(!empty($tagsArray)): ?>
                            <?php foreach($tagsArray as $tag)
                            { ?>
                            <p class="tag"> <?php echo $tag->name ?></p>
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
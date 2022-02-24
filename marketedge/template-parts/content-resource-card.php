<?php 
// Resource Cards
$featured = get_query_var('is_featured');
$class = "col-lg-6";
if($featured):
    $class = "col-md-12";
endif;

$resource_id = get_the_ID();
$short_description = get_field('short_description', $resource_id);
$link_type = get_field('link_type', $resource_id);
$link_type_file = get_field('file', $resource_id);
$link_type_url = get_field('url', $resource_id);
$featured_cta_text = get_field('featured_cta_text', $featured_resource_id);

if($link_type === 'file'):
    $url = $link_type_file;
    $url_target = '_blank';
else:
    $url = $link_type_url;
    $url_target = $url['target'];
endif;

$terms = get_the_terms( $resource_id, 'resource_type' );
$term = array_pop($terms);
$term_icon = get_field('icon', $term->taxonomy . '_' . $term->term_id);
?>
<div class="<?php echo $class;?> resource">
    <a href="<?php echo $url['url'];?>" target="<?php echo $url_target;?>" class="download-link">
        <div class="resource-content">
            <div class="row">
                <div class="col-md-5 resource-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="col-md-7 resource-description">
                    <?php if($term): ?>
                        <h3><?php echo $term->name;?></h3>
                    <?php endif; ?>
                    <h2><?php echo get_the_title();?></h2>
                    <?php if($short_description): ?>
                        <p><?php echo $short_description;?></p>
                    <?php endif; ?>

                    <?php if($featured && $featured_cta_text):?>
                        <span class="btn"><?php echo $featured_cta_text;?></span>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </a>
</div>
<?php 
// Resource Cards
$featured = get_query_var('is_featured');
$class = "col-xl-6";
$class_resource_content = "col-md-7";
$class_resource_image = "col-md-5";
if($featured):
    $class = "col-md-12";
    $class_resource_content = "col-md-6";
    $class_resource_image = "col-md-6";
endif;

$resource_id = get_the_ID();
$time_to_read = get_field('time_to_read', $resource_id);
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
                <div class="<?php echo $class_resource_content;?> resource-description">
                    <?php if($term): ?>
                        <h3><?php echo $term->name;?></h3>
                    <?php endif; ?>
                    <h2><?php echo get_the_title();?></h2>

                    <?php if($time_to_read):?>
                        <?php if($featured): ?>
                            <p class="time-to-read">
                                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                    <g fill-rule="nonzero" fill="none">
                                        <path d="M12.314 2.09c5.678 0 10.265 4.508 10.265 10.05 0 5.54-4.587 10.049-10.265 10.049-5.677 0-10.265-4.508-10.265-10.05C2.05 6.6 6.637 2.09 12.314 2.09z" fill="#BBD3DD"/>
                                        <path d="M12.314 0c6.793 0 12.314 5.426 12.314 12.14 0 6.713-5.521 12.139-12.314 12.139C5.522 24.279 0 18.853 0 12.139 0 5.426 5.522 0 12.314 0zm0 2.09C6.637 2.09 2.05 6.598 2.05 12.14c0 5.54 4.588 10.049 10.265 10.049 5.678 0 10.265-4.508 10.265-10.05 0-5.54-4.587-10.049-10.265-10.049z" fill="#395F77"/>
                                        <path d="M12.314 4.236c.526 0 .959.403 1.018.923l.007.122-.001 5.813h3.697c.526 0 .959.404 1.018.924l.007.121c0 .536-.396.978-.905 1.039l-.12.007h-4.72c-.526 0-.96-.404-1.019-.924l-.006-.122V5.281c0-.577.458-1.045 1.024-1.045z" fill="#395F77"/>
                                    </g>
                                </svg>
                                <?php echo $time_to_read;?>
                            </p>
                        <?php else: ?>
                            <p class="time-to-read">
                                <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                    <g transform="translate(1 1)" stroke="#395F77" stroke-width="1.21" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <ellipse fill="#BBD3DD" fill-rule="nonzero" cx="6.663" cy="6.426" rx="6.663" ry="6.426"/>
                                        <path d="M6.663 2.454v3.972h2.786"/>
                                    </g>
                                </svg>
                                <?php echo $time_to_read;?>
                            </p>
                        <?php endif;?>
                    <?php endif;?>


                    <?php if($short_description): ?>
                        <p><?php echo $short_description;?></p>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $class_resource_image;?> resource-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </a>
</div>
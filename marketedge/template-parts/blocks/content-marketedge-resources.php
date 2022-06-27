<?php 
/**
 * Block Name: Resources
 */

// create id attribute for specific styling
$classes = 'resources';
$id = 'resources_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}

if(is_admin()):
    echo '<h2>No Preview, will display Resources on Front End</h2>';
else:
    $args = array(
        'post_type'   => 'resources',
        'showposts'   => 1,
        'post_status' => 'publish',
        'meta_query'  => array(
            'relation'		=> 'AND',
            array(
                'key'	 	=> 'featured',
                'value'	  	=> array(1),
                'compare' 	=> 'IN',
            ),
        ),
    );
    $featured_resource = new WP_Query($args);
    $featured_resource_id = false;
    if ( $featured_resource->have_posts() ) :
        ?>
        <section class="resources featured">
            <div class="container">
                <div class="row">
                    <?php
                    while ($featured_resource->have_posts()) : $featured_resource->the_post();
                        $featured_resource_id = get_the_ID();
                        set_query_var('is_featured', true);
                        get_template_part( 'template-parts/content', 'resource-card' );
                    endwhile;
                    ?>
                </div>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    endif;

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $posts_per_page = get_option( 'posts_per_page' );
    $args = array(
        'post_type'      => 'resources',
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
        'post_status'    => 'publish',
    );
    if($featured_resource_id):
        $args['post__not_in'] = array($featured_resource_id);
    endif;
    $resources = new WP_Query($args);
    if ( $resources->have_posts() ) :
        ?>
        <section class="resources archive">
            <div class="container">
                <div class="row grid">
                    <?php
                    while ($resources->have_posts()) : $resources->the_post();
                        set_query_var('is_featured', false);
                        get_template_part( 'template-parts/content', 'resource-card' );
                    endwhile;
                    ?>
                </div>
                <?php
                if (  $resources->max_num_pages > 1 ):
                ?>
                <div class="row">
                    <div class="container text-center">
                        <div class="col">
                            <a class="btn load-more" data-maxpages="<?php echo $resources->max_num_pages;?>" data-ppp="<?php echo $posts_per_page;?>" data-exclude="<?php echo $featured_resource_id;?>">Load More</a>
                        </div>
                    </div>
                </div>
                <?php
                endif;
                ?>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    endif;
endif;
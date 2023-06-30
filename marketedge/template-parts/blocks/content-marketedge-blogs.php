<?php 
/**
 * Block Name: Blogs
 */

// create id attribute for specific styling
$classes = 'blogs';
$id = 'blogs_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}

if(is_admin()):
    echo '<h2>No Preview, will display Blog Posts on Front End</h2>';
else:
    $args = array(
        'post_type'   => 'blog-posts',
        'showposts'   => 1,
        'post_status' => 'publish',
        'meta_query'  => array(
            array(
                'key'	 	=> 'featured',
                'value'	  	=> 1,
            ),
        ),
    );
    $featured_blog = new WP_Query($args);
    $featured_blog_id = false;
    if ( $featured_blog->have_posts() ) :
        ?>
        <section class="blogs featured">
            <div class="container">
                <div class="row">
                    <?php
                    while ($featured_blog->have_posts()) : $featured_blog->the_post();
                        $featured_blog_id = get_the_ID();
                        set_query_var('is_featured', true);
                        get_template_part( 'template-parts/content', 'resource-card', array('term_type' => 'blog_post_type', 'card_type' => 'blog') );
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
        'post_type'      => 'blog-posts',
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
        'post_status'    => 'publish',
    );
    if($featured_blog_id):
        $args['post__not_in'] = array($featured_blog_id);
    endif;
    $blogs = new WP_Query($args);
    if ( $blogs->have_posts() ) :
        ?>
        <section class="blogs archive">
            <div class="container">
                <div class="row grid">
                    <?php
                    while ($blogs->have_posts()) : $blogs->the_post();
                        set_query_var('is_featured', false);
                        get_template_part( 'template-parts/content', 'resource-card', array('term_type' => 'blog_post_type', 'card_type' => 'blog') );
                    endwhile;
                    ?>
                </div>
                <?php
                if (  $blogs->max_num_pages > 1 ):
                ?>
                <div class="row">
                    <div class="container text-center">
                        <div class="col">
                            <a class="btn load-more" data-maxpages="<?php echo $blogs->max_num_pages;?>" data-ppp="<?php echo $posts_per_page;?>" data-exclude="<?php echo $featured_blog_id;?>">Load More</a>
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
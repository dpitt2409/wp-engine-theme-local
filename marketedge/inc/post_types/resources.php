<?php
/**
* Resources custom post type and all related functionality
*
* @package marketedge
* 
*/

if( !function_exists( 'marketedge_resources_register' ) ) :
/**
 * Register the menu options
 *
 */
function marketedge_resources_register() {
    // Resource Post Type
    $args = array(
        'labels'             => array(
            'name'               => _x( 'Resources', 'post type general name' ),
            'singular_name'      => _x( 'Resource', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'resources' ),
            'add_new_item'       => __( 'Add New Resource' ),
            'edit_item'          => __( 'Edit Resource' ),
            'new_item'           => __( 'New Resource' ),
            'view_item'          => __( 'View Resource' ),
            'search_items'       => __( 'Search Resource' ),
            'not_found'          => __( 'Nothing found' ),
            'not_found_in_trash' => __( 'Nothing found in Trash' ),
            'parent_item_colon'  => ''
        ),
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'query_var'          => true,
        'menu_icon'          => 'dashicons-media-document',
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => null,
        'has_archive'        => false,
        'with_front'         => false,
        'rewrite'            => array( 'slug' => 'resources' ),
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'resources', $args );

    register_taxonomy( 'resource_type', 'resources', array(
        'labels'             => array(
            'name'               => _x( 'Type', 'post type general name' ),
            'singular_name'      => _x( 'Type', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'Type' ),
            'add_new_item'       => __( 'Add New Type' ),
            'edit_item'          => __( 'Edit Type' ),
            'new_item'           => __( 'New Type' ),
            'view_item'          => __( 'View Type' ),
            'search_items'       => __( 'Search Types' ),
            'not_found'          => __( 'Nothing found' ),
            'not_found_in_trash' => __( 'Nothing found in Trash' ),
            'parent_item_colon'  => ''
        ),
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'hierarchical'       => true,
        'menu_position'      => null,
        'show_admin_column' => true,
    ));

}
add_action( 'init', 'marketedge_resources_register' );
endif;

/**
 * Resources Ajax
 */
function marketedge_resources_ajax_handler(){

	$resources = new WP_Query();

	// prepare our arguments for the query
	$args = array(
		'post_type' => array('resources'),
		'posts_per_page' => $_POST['posts_per_page'],
		'paged' => $_POST['page'] + 1,
		'post_status' => 'publish',
        'post__not_in' => array($_POST['exclude'])
	);

	$resources->query($args);
	// run the loop
	while ($resources->have_posts()) : $resources->the_post();
        set_query_var('is_featured', false);
        get_template_part( 'template-parts/content', 'resource-card' );
	endwhile;

	die; // here we exit the script
}
add_action('wp_ajax_loadmore', 'marketedge_resources_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'marketedge_resources_ajax_handler'); // wp_ajax_nopriv_{action}
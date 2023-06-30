<?php
/**
* Blog Post custom post type and all related functionality
*
* @package marketedge
* 
*/

if( !function_exists( 'marketedge_blog_posts_register' ) ) :
/**
 * Register the menu options
 *
 */
function marketedge_blog_posts_register() {
    // Blog Post Post Type
    $args = array(
        'labels'             => array(
            'name'               => _x( 'Blog Posts', 'post type general name' ),
            'singular_name'      => _x( 'Blog Post', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'blog posts' ),
            'add_new_item'       => __( 'Add New Blog Post' ),
            'edit_item'          => __( 'Edit Blog Post' ),
            'new_item'           => __( 'New  Blog Post' ),
            'view_item'          => __( 'View  Blog Post' ),
            'search_items'       => __( 'Search  Blog Post' ),
            'not_found'          => __( 'Nothing found' ),
            'not_found_in_trash' => __( 'Nothing found in Trash' ),
            'parent_item_colon'  => ''
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'menu_icon'          => 'dashicons-media-document',
        'capability_type'    => 'post',
        'hierarchical'       => true,
        // 'query_var'          => 'my-blog-posts',
        'has_archive'        => false,
        'show_in_rest'       => true,
        'rewrite'            => array( 'slug' => 'blog' ),
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'template-lock'      => 'all',
        'template'           => array(
            array( 'acf/marketedge-simplehero', array()),
            array( 'acf/marketedge-article', array()),
            array( 'acf/marketedge-cta', array()),
        ),
    );
    register_post_type( 'blog-posts', $args );

    register_taxonomy( 'blog_post_type', 'blog-posts', array(
        'labels'             => array(
            'name'               => _x( 'Type', 'post type general name' ),
            'singular_name'      => _x( 'Type', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'Blog Post Type' ),
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
        'show_in_rest'       => true,
        'capability_type'    => 'post',
        'hierarchical'       => true,
        'menu_position'      => null,
        'show_admin_column' => true,
    ));

}
add_action( 'init', 'marketedge_blog_posts_register' );
endif;

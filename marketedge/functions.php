<?php
/**
 * Marketedge functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Marketedge
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'marketedge_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function marketedge_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Marketedge, use a find and replace
		 * to change 'marketedge' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'marketedge', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'marketedge' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'marketedge_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marketedge_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marketedge_content_width', 640 );
}
add_action( 'after_setup_theme', 'marketedge_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function marketedge_scripts() {
	wp_enqueue_style( 'marketedge-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'marketedge-style', 'rtl', 'replace' );

    wp_enqueue_script( 'marketedge-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'marketedge-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marketedge_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ACF Options, Configs
if (function_exists('acf_add_options_page')) {

	$event_settings_page = acf_add_options_page(array(
		'page_title'    => __('Theme Settings'),
		'menu_title'    => __('Theme Settings'),
		'menu_slug'     => 'theme-general-settings'
	));
}
/* 
* ACF Local JSON
*/
add_filter('acf/settings/save_json', 'eventual_acf_json_save_point');
function eventual_acf_json_save_point( $path ) {
    // update path
    $path = dirname(__FILE__) . '/acf-sync';
    // return
    return $path;
}
add_filter('acf/settings/load_json', 'eventual_acf_json_load_point');
function eventual_acf_json_load_point( $paths ) {
    // append path
    $paths[] = dirname(__FILE__) . '/acf-sync';
    // return
    return $paths;
}
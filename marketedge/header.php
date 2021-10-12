<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marketedge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php 
        $gtm = !empty(getenv('GTM_ID')) ? getenv('GTM_ID') : get_field('gtm_id', 'option');
        if($gtm):
        ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?= $gtm; ?>');</script>
        <!-- End Google Tag Manager -->
        <?php
    endif; 

    // Get header scripts
    $header_scripts = get_field('header_scripts', 'option');
    if($header_scripts):
        echo $header_scripts;
    endif;
    
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
<?php
    // Get body scripts
    $body_scripts = get_field('body_scripts', 'option');
    if($body_scripts):
        echo $body_scripts;
    endif;
?>
<?php
    $gtm = !empty(getenv('GTM_ID')) ? getenv('GTM_ID') : get_field('gtm_id', 'option');
    if($gtm):
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php 
endif;
?>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'marketedge' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
            <a href="<?php echo home_url();?>" rel="home">
            <?php 
            $logo = get_field('logo','option');
            if ($logo): ?>
                <img src="<?php echo $logo['url'];?>" alt="<?php echo get_bloginfo('name'); ?>" />
            <?php else: ?>
                <h2><?php echo get_bloginfo('name'); ?></h2>
            <?php endif; ?>
            </a>
        </div>
		<nav id="site-navigation" class="main-navigation">
			<div role="button" class="menu-toggle" aria-label="Menu Toggle" aria-controls="primary-menu" aria-expanded="false"><span></span><span></span><span></span></div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</header><!-- #masthead -->

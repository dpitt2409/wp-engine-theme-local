<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marketedge
 */

// Check to see if we should show global form
$global_footer_form = get_field('global_footer_form', 'option');
$display_on_pages = $global_footer_form['display_on_pages'];
if($display_on_pages):
    $current_page = get_the_ID();
    if (in_array($current_page, $display_on_pages)):
        $background = $global_footer_form['background'];
        $heading = $global_footer_form['heading'];
        $content = $global_footer_form['content'];
        $embed_form = $global_footer_form['embed_form'];
        $image = $global_footer_form['image'];
        ?>
        <section class="start-form" style="background: url(<?php echo $background['url'];?>);background-repeat:no-repeat;background-position:center;background-size:cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <?php if($heading):?>
                            <h2><span class="slash">/</span> <?php echo $heading;?></h2>
                        <?php endif;?>
                        <?php if($content):?>
                            <p><?php echo $content;?></p>
                        <?php endif;?>
                        <?php if($embed_form):?>
                            <?php echo $embed_form;?>
                        <?php endif;?>
                    </div>
                    <div class="col-md-4">
                        <?php if($image):?>
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" />
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    endif;
endif;
?>
	<footer id="colophon">
        <div class="gradient-line"></div>
        <div class="site-footer row">
            <div class="site-info site-branding col-md-6">
                <a href="<?php echo home_url();?>" rel="home">
                    <?php 
                    $footer_logo = get_field('footer_logo','option');
                    if ($footer_logo): ?>
                        <img src="<?php echo $footer_logo['url'];?>" alt="<?php echo get_bloginfo('name'); ?>" />
                    <?php endif; ?>
                </a>
            </div>
            <div class="footer-links col-md-6">
                <?php
                if(have_rows('footer_menus', 'option')):
                    ?>
                    <div class="row">
                    <?php
                    while(have_rows('footer_menus', 'option')): the_row();
                        ?>
                        <div class="col-lg-3 col-md-4">
                            <ul>
                            <?php
                            if(have_rows('footer_menu_column', 'option')):
                                while(have_rows('footer_menu_column', 'option')): the_row();
                                    $footer_link = get_sub_field('footer_link');
                                    $footer_link_class = get_sub_field('footer_link_class');
                                    ?>
                                    <li><a href="<?php echo $footer_link['url'];?>" target="<?php echo $footer_link['target'];?>"><?php if($footer_link_class):?><i class="<?php echo $footer_link_class;?>"></i><?php endif; echo $footer_link['title'];?></a></li>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                            </ul>
                        </div>
                        <?php
                    endwhile;
                    ?>
                    </div>
                    <?php
                endif;
                ?>
            </div>
        </div>
        <div class="privacy">
            <?php
            if(have_rows('footer_privacy_menu', 'option')):
                ?>
                <ul class="privacy-links">
                <?php
                while(have_rows('footer_privacy_menu', 'option')): the_row();
                    $privacy_link = get_sub_field('link');
                    ?>
                    <li><a href="<?php echo $privacy_link['url'];?>" target="<?php echo $privacy_link['target'];?>"><?php echo $privacy_link['title'];?></a></li>
                    <?php
                endwhile;
                ?>
                </ul>
                <?php
            endif;
            ?>
        </div>
	</footer>
</div>

<?php 
wp_footer();
$footer_scripts = get_field('footer_scripts', 'option');
if($footer_scripts):
    echo $footer_scripts;
endif;
?>

</body>
</html>

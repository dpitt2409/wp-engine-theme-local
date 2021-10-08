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

?>
	<footer id="colophon">
        <div class="footer-gradient"></div>
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
                        <div class="col-md-3">
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

<?php
/**
 * Template Name: Pricing
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

            $hero_background = get_field('hero_background');
            $hero_heading = get_field('hero_heading');
            $hero_content = get_field('hero_content');
            $hero_cta = get_field('hero_cta');
            if( $hero_background ): 
                ?>
                <section class="hero" style="background: url(<?php echo $hero_background['url'];?>);background-repeat:no-repeat;background-position:center;background-size:cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <?php if($hero_heading):?>
                                    <h1><?php echo $hero_heading;?></h1>
                                <?php endif;?>
                                <?php if($hero_content):?>
                                    <p><?php echo $hero_content;?></p>
                                <?php endif;?>
                                <?php if($hero_cta):?>
                                    <a class="btn primary" href="<?php echo $hero_cta['url'];?>" target="<?php echo $hero_cta['url'];?>"><?php echo $hero_cta['title'];?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            endif;

            // If any of the tables have rows create section
            if( have_rows('pricing_table') ):
                ?>
                <section id="packages" class="tables">
                    <div class="container">
                        <div class="plan-table">
                            <?php
                            while ( have_rows('pricing_table') ) : the_row();
                                $pricing_table_heading = get_sub_field('table_heading');
                                if($pricing_table_heading): 
                                    ?>
                                    <h2><?php echo $pricing_table_heading;?></h2>
                                    <?php
                                endif;
                            endwhile;
                            ?>
                            <table>
                                <?php
                                while ( have_rows('pricing_table') ) : the_row();
                                    if( have_rows('table_row_headings') ):
                                        while ( have_rows('table_row_headings') ) : the_row();
                                            if( have_rows('table_row_heading') ):
                                                ?>
                                                <thead>
                                                    <?php
                                                    $cell_count = 1;
                                                    while ( have_rows('table_row_heading') ) : the_row();
                                                        $cell_background_color = get_sub_field('cell_background_color');
                                                        $cell_text = get_sub_field('cell_text');

                                                        $cell_text_align = "left";
                                                        if($cell_count > 1):
                                                            $cell_text_align = "center";
                                                        endif;
                                                        ?>
                                                        <th style="background:<?php echo $cell_background_color;?>;text-align:<?php echo $cell_text_align;?>"><?php echo $cell_text;?></th>
                                                        <?php
                                                        $cell_count++;
                                                    endwhile;
                                                    ?>
                                                </thead>
                                                <?php
                                            endif;
                                        endwhile;
                                    endif;
                                    if( have_rows('table_row_cells') ):
                                        ?>
                                        <tbody>
                                            <?php
                                            while ( have_rows('table_row_cells') ) : the_row();
                                                if( have_rows('table_row_cell') ):
                                                    ?>
                                                    <tr>
                                                        <?php
                                                        $cell_count = 1;
                                                        while ( have_rows('table_row_cell') ) : the_row();
                                                            $cell_background_color = get_sub_field('cell_background_color');
                                                            $show_checkmark = get_sub_field('show_checkmark');
                                                            $cell_heading_text = get_sub_field('cell_heading_text');
                                                            $cell_heading_size = get_sub_field('cell_heading_size');
                                                            $cell_text = get_sub_field('cell_text');
                                                            $cell_text_color = get_sub_field('cell_text_color');

                                                            $cell_text_align = "left";
                                                            if($cell_count > 1):
                                                                $cell_text_align = "center";
                                                            endif;
                                                            ?>
                                                            <td style="background:<?php echo $cell_background_color;?>;text-align:<?php echo $cell_text_align;?>">
                                                                <?php if($show_checkmark):?>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="46.728" height="34.846" viewBox="0 0 46.728 34.846"><defs><style>.a{fill:#e39600;}</style></defs><path class="a" d="M15.871,38.739.684,23.552a2.337,2.337,0,0,1,0-3.3l3.3-3.3a2.336,2.336,0,0,1,3.3,0l10.231,10.23L39.436,5.262a2.337,2.337,0,0,1,3.3,0l3.3,3.3a2.337,2.337,0,0,1,0,3.3L19.175,38.739A2.336,2.336,0,0,1,15.871,38.739Z" transform="translate(0 -4.577)"/></svg>
                                                                <?php endif;?>
                                                                <?php if($cell_heading_text):?>
                                                                    <h3 style="color: <?php echo $cell_text_color;?>" class="<?php echo $cell_heading_size;?>">
                                                                        <?php echo $cell_heading_text;?>
                                                                    </h3>
                                                                <?php endif;?>
                                                                <?php if($cell_text):
                                                                    echo $cell_text;
                                                                endif; ?>
                                                            </td>
                                                            <?php
                                                            $cell_count++;
                                                        endwhile;
                                                        ?>
                                                    </tr>
                                                    <?php
                                                endif;
                                            endwhile;
                                            ?>
                                        </tbody>
                                        <?php
                                    endif;
                                endwhile;
                                ?>
                            </table>
                        </div>
                    </div>
                </section>
                <?php
            endif;

            if(get_the_content()):
                ?>
                <section class="entry-content">
                    <div class="container">
                        <?php
                        the_content();
                        ?>
                    </div>
                </section>
                <?php
            endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();

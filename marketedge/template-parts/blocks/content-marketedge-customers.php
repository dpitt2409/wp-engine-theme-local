<?php 
/**
 * Block Name: Two Up
 */

// create id attribute for specific styling
$classes = 'customers';
$id = 'customers_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}

$heading = get_field('heading');
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">  
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php if($heading): ?>
                    <h2><?php echo $heading;?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if(have_rows('customers')): 
        ?>
        <div class="customers-slider">
            <?php
            while(have_rows('customers')): the_row();
                $customer = get_sub_field('image');
                if($customer):
                    ?>
                    <div class="customer">
                        <img src="<?php echo $customer['url'];?>" alt="<?php echo $customer['alt'];?>" />
                    </div>
                    <?php
                endif;
            endwhile;
            ?>
        </div>
        <?php
    endif; ?>
</section>
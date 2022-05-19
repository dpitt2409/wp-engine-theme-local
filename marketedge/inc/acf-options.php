<?php
// ACF Options, Configs
if (function_exists('acf_add_options_page')) {

	$event_settings_page = acf_add_options_page(array(
		'page_title'    => __('Theme Settings'),
		'menu_title'    => __('Theme Settings'),
		'menu_slug'     => 'theme-general-settings'
	));
}

/* 
* Register ACF Gutenburg Category
*/
function marketedge_block_categories( $categories, $post ) {
    return array_merge(
        array(
            array(
                'slug' => 'marketedge',
                'title' => __( 'Marketedge', 'marketedge' ),
            ),
        ),
        $categories
    );
}
add_filter( 'block_categories', 'marketedge_block_categories', 10, 2 );

/* 
* Register ACF Gutenburg Blocks
*/
add_action('acf/init', 'marketedge_gutenburg_acf_blocks');
function marketedge_gutenburg_acf_blocks() {
	// check function exists
	if( function_exists('acf_register_block') ) {
		// register hero block
		acf_register_block(
            array(
                'name'				=> 'marketedge-hero',
                'title'				=> __('Large Hero with Overlay Image'),
                'description'		=> __('Used on homepage'),
                'render_callback'	=> 'marketedge_render_acf_block',
                'category'			=> 'marketedge',
                'keywords'			=> array( 'Hero' ),
                'example'           => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri().'/template-parts/blocks/previews/block-hero-preview.jpg',
                        ),
                    )
                )
		    )
        );
		// register simplehero block
		acf_register_block(
            array(
                'name'				=> 'marketedge-simplehero',
                'title'				=> __('Simple Hero'),
                'description'		=> __('Used on pages'),
                'render_callback'	=> 'marketedge_render_acf_block',
                'category'			=> 'marketedge',
                'keywords'			=> array( 'Simple Hero' ),
                'example'           => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri().'/template-parts/blocks/previews/block-simplehero-preview.jpg',
                        ),
                    )
                )
		    )
        );
		// register testimonial block
		acf_register_block(
            array(
                'name'				=> 'marketedge-testimonial',
                'title'				=> __('Testimonial'),
                'description'		=> __('Testimonial'),
                'render_callback'	=> 'marketedge_render_acf_block',
                'category'			=> 'marketedge',
                'keywords'			=> array( 'Testimonial' ),
                'example'           => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri().'/template-parts/blocks/previews/block-testimonial-preview.jpg',
                        ),
                    )
                )
		    )
        );
		// register twoup block
		acf_register_block(
            array(
                'name'				=> 'marketedge-twoup',
                'title'				=> __('Two Up'),
                'description'		=> __('Two Up'),
                'render_callback'	=> 'marketedge_render_acf_block',
                'category'			=> 'marketedge',
                'keywords'			=> array( 'Two Up' ),
                'example'           => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri().'/template-parts/blocks/previews/block-twoup-preview.jpg',
                        ),
                    )
                )
		    )
        );
		// register customers block
		acf_register_block(
            array(
                'name'				=> 'marketedge-customers',
                'title'				=> __('Customers'),
                'description'		=> __('Customers'),
                'render_callback'	=> 'marketedge_render_acf_block',
                'category'			=> 'marketedge',
                'keywords'			=> array( 'Customers' ),
                'example'           => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri().'/template-parts/blocks/previews/block-customers-preview.jpg',
                        ),
                    )
                )
		    )
        );
		// register cta block
		acf_register_block(
            array(
                'name'				=> 'marketedge-cta',
                'title'				=> __('CTA'),
                'description'		=> __('CTA'),
                'render_callback'	=> 'marketedge_render_acf_block',
                'category'			=> 'marketedge',
                'keywords'			=> array( 'CTA' ),
                'example'           => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri().'/template-parts/blocks/previews/block-cta-preview.jpg',
                        ),
                    )
                )
		    )
        );
    }
}

/* 
* Callbacks for Custom Gutenburg blocks using ACF
*/
function marketedge_render_acf_block( $block, $is_preview = false ) {

    // Preview Image on hover when selecting block
    if( !empty( $block['data']['preview_image'] ) ) {
        echo '<figure><img src="'.$block['data']['preview_image'].'"></figure>';
        return;
    }

	// convert name ("acf/intro") into path friendly slug ("intro")
	$slug = str_replace('acf/', '', $block['name']);
	// include a template part from within the "partials/blocks" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") );
	}
}

/* 
* Wrap Default Gutenburg blocks
*/
add_filter( 'render_block', 'marketedge_wrap_default_blocks', 10, 2 );
function marketedge_wrap_default_blocks( $block_content, $block ) {

    // If not default cover or custom acf blocks
    if ( $block['blockName'] != 'core/cover' && strpos($block['blockName'], 'acf/marketedge') === false ) {

        $block_class = 'classic';
        if($block['blockName'] != null){
            $block_class = str_replace('core/', '', $block['blockName']);
        }

        // If block is empty return empty do not wrap causing empty container
        if( $block['blockName'] === null && empty( trim( $block['innerHTML'] ) ) ){
            $block_content = $block_content;
        }else{
            $block_content = '<div class="container '.$block_class.'">' . $block_content . '</div>';
        }
    }

    return $block_content;
}
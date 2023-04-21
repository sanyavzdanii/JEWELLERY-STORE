<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 * Load jQuery.
 */

function jwshop_load_scripts() {
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick.min.js', array('jquery'), false, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/scripts.js', array('jquery'), NULL, true);
}

add_action('wp_enqueue_scripts', 'jwshop_load_scripts', 10);

/**
* Enable custom logo support
*/

add_theme_support( 'custom-logo' );

function jewshop_custom_logo_setup() {
	$defaults = array(
		'height'               => 68,
		'width'                => 192,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true,
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'jewshop_custom_logo_setup' );

/*
* Add html5 support to search form
*/

add_theme_support( 'html5', array( 'search-form' ) );

/*
* Add Style.css
*/

function jewshop_enqueue_style() {
wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'jewshop_enqueue_style' );

/*
* Cart products counter on header
*/

add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
    <?php
    $fragments['.basket-btn__counter'] = ob_get_clean();
    return $fragments;
}

/*
* Theme options
*/

add_action( 'customize_register', 'true_customizer_init' );

function true_customizer_init( $wp_customize ) {

	$wp_customize->add_panel( 'true_panel',
        array(
            'priority'       => 100,
            'title'          => 'JewShop Settings by Zhadan',
            'description'    => 'Here you can customize the appearance of your site.',
        )
    );

    $wp_customize->add_section(
    	'true_header_section',
    	array(
    		'title'       => 'Header',
    		'priority'    => 1,
    		'description' => 'Here you can customize the header of your site.',
    		'panel'       => 'true_panel'
    	)
    );

    $wp_customize->add_setting(
    	'jw_header_2',
    	array(
    		'default'    =>  'JEWELLERY STORE',
    		'transport'  =>  'postMessage'
    	)
    );

    $wp_customize->add_control(
    	'jw_header_2',
    	array(
    		'section'   => 'true_header_section',
    		'label'     => 'Header 2',
    		'type'      => 'text'
    	)
    );

    $wp_customize->add_setting(
    	'jw_header_3',
    	array(
    		'default'    =>  'An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly', // для чекбокса значения по умолчанию true/false
    		'transport'  =>  'postMessage'
    	)
    );

    $wp_customize->add_control(
    	'jw_header_3',
    	array(
    		'section'   => 'true_header_section',
    		'label'     => 'Header 3',
    		'type'      => 'text'
    	)
    );

    $wp_customize->add_setting(
    	'jw_button_1',
    	array(
    		'default'    =>  'shop now',
    		'transport'  =>  'postMessage'
    	)
    );

    $wp_customize->add_control(
    	'jw_button_1',
    	array(
    		'section'   => 'true_header_section',
    		'label'     => 'Button 1',
    		'type'      => 'text'
    	)
    );

    $wp_customize->add_setting(
    	'jw_button_1_link',
    	array(
    		'default'    =>  '#',
    		'transport'  =>  'postMessage'
    	)
    );

    $wp_customize->add_control(
    	'jw_button_1_link',
    	array(
    		'section'   => 'true_header_section',
    		'label'     => 'Button 1 Link',
    		'type'      => 'text'
    	)
    );

    $wp_customize->add_setting(
    	'jw_button_2',
    	array(
    		'default'    =>  'shop now',
    		'transport'  =>  'postMessage'
    	)
    );

    $wp_customize->add_control(
    	'jw_button_2',
    	array(
    		'section'   => 'true_header_section',
    		'label'     => 'Button 2',
    		'type'      => 'text'
    	)
    );

    $wp_customize->add_setting(
    	'jw_button_2_link',
    	array(
    		'default'    =>  '#',
    		'transport'  =>  'postMessage'
    	)
    );

    $wp_customize->add_control(
    	'jw_button_2_link',
    	array(
    		'section'   => 'true_header_section',
    		'label'     => 'Button 2 Link',
    		'type'      => 'text'
    	)
    );

    $wp_customize->add_setting(
    	'jw_bg_link',
    	array(
    		'default'    =>  './wp-content/themes/jewstore/assets/Pic_Slider.png',
    		'transport'  =>  'postMessage'
    	)
    );

    $wp_customize->add_control(
    	'jw_bg_link',
    	array(
    		'section'   => 'true_header_section',
    		'label'     => 'Background img Link',
    		'type'      => 'text'
    	)
    );

    // Block 1

    $wp_customize->add_section(
        'true_block_1_section',
        array(
            'title'       => 'Block 1',
            'priority'    => 2,
            'description' => 'Here you can customize the Block 1 of your site.',
            'panel'       => 'true_panel'
        )
    );

    $wp_customize->add_setting(
        'jw_block_1_header_1',
        array(
            'default'    =>  'Donec sollicitudin',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_1_header_1',
        array(
            'section'   => 'true_block_1_section',
            'label'     => 'Header 1',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_1_header_2',
        array(
            'default'    =>  'JEWELLERY',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_1_header_2',
        array(
            'section'   => 'true_block_1_section',
            'label'     => 'Header 2',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_1_header_3',
        array(
            'default'    =>  'STORE',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_1_header_3',
        array(
            'section'   => 'true_block_1_section',
            'label'     => 'Header 3',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_1_header_4',
        array(
            'default'    =>  'An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly.',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_1_header_4',
        array(
            'section'   => 'true_block_1_section',
            'label'     => 'Text',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_1_Button',
        array(
            'default'    =>  'shop now',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_1_Button',
        array(
            'section'   => 'true_block_1_section',
            'label'     => 'Button 1 Text',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_1_Button_link',
        array(
            'default'    =>  '#',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_1_Button_link',
        array(
            'section'   => 'true_block_1_section',
            'label'     => 'Button 1 link',
            'type'      => 'text'
        )
    );

    // Block 2
    
    $wp_customize->add_section(
        'true_block_2_section',
        array(
            'title'       => 'FEATURED PRODUCTS',
            'priority'    => 3,
            'description' => 'Here you can customize the FEATURED PRODUCTS of your site.',
            'panel'       => 'true_panel'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_header_1',
        array(
            'default'    =>  'Adipisicing elit',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_header_1',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Header 1',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_header_2',
        array(
            'default'    =>  'FEATURED PRODUCTS',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_header_2',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Header 2',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_header_3',
        array(
            'default'    =>  'There are many variations of passages of lorem ipsum available.',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_header_3',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Text',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_banner_img',
        array(
            'default'    =>  '/assets/banner-1.png',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_banner_img',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Banner 1 Img Url',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_banner_header',
        array(
            'default'    =>  'TRISTIQUE JUSTO',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_banner_header',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Banner 1 Header',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_banner_text',
        array(
            'default'    =>  'Started now shortly had for assured hearing expense led juvenile.',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_banner_text',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Banner 1 Text',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_banner_link',
        array(
            'default'    =>  '#',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_banner_link',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Banner 1 Link',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_banner_2_img',
        array(
            'default'    =>  '/assets/banner-2.png',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_banner_2_img',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Banner 2 Img Url',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_banner_2_header',
        array(
            'default'    =>  'TRISTIQUE JUSTO',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_banner_2_header',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Banner 2 Header',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_banner_2_text',
        array(
            'default'    =>  'Started now shortly had for assured hearing expense led juvenile.',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_banner_2_text',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Banner 2 Text',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting(
        'jw_block_2_banner_2_link',
        array(
            'default'    =>  '#',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'jw_block_2_banner_2_link',
        array(
            'section'   => 'true_block_2_section',
            'label'     => 'Banner 2 Link',
            'type'      => 'text'
        )
    );

    // Footer

    $wp_customize->add_section(
        'true_footer_section',
        array(
            'title'       => 'Footer',
            'priority'    => 5,
            'description' => 'Here you can customize the footer of your website.',
            'panel'       => 'true_panel'
        )
    );
}

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
wp_enqueue_script('jquery');

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
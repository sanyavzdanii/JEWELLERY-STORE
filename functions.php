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
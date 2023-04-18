<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewBarberry
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style.css" />
    <?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header>
        <div class="site-header container">
            <div class="site-header__left">
                logo
            </div>
            <nav id="site-navigation" class="header-menu px-xl-3">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_id'        => 'primary-menu'
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
            <div class="site-header__right">
                <div>
                    search and cart
                </div>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </button>
            </div>
        </div>
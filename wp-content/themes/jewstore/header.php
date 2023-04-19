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

  global $woocommerce;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header>
	    <div class="container">
	        <div class="site-header">
                <div class="site-header__left">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<img src="' . get_stylesheet_directory_uri() . '/assets/Logo.svg" alt="' . get_bloginfo( 'name' ) . ' width="112px" height="40px">';
                        }
                    ?>
                </div>
                <nav id="site-navigation" class="header-menu hide-when-search px-xl-3">
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
                    <div class="login hide-when-search lined-link">
                        <a href="#">Login / Register</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="search-form">
                            <div class="d-flex align-items-center position-relative">
                                <div class="search-form__input hide-when-search hide">
                                    <?php get_search_form(); ?>
                                </div>
                                <svg class="search-form__btn svg-icon hide-when-search pointer">
                                    <?php echo '<use xlink:href="' . get_stylesheet_directory_uri() . '/assets/sprite.svg#search-icon"/>'; ?>
                                </svg>
                                <svg class="search-form__btn svg-icon hide-when-search hide pointer">
                                    <?php echo '<use xlink:href="' . get_stylesheet_directory_uri() . '/assets/sprite.svg#close-icon"/>'; ?>
                                </svg>
                            </div>
                        </div>
                        <div class="hide-when-search ml-18 pointer position-relative">
                            <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="d-flex align-items-center">
                                <svg class="cart-btn svg-icon">
                                    <?php echo '<use xlink:href="' . get_stylesheet_directory_uri() . '/assets/sprite.svg#cart-icon"/>'; ?>
                                </svg>
                                <span class="cart-counter">
                                    <?php
                                        $count = intval($woocommerce->cart->cart_contents_count);

                                        if($count > 9) {
                                            echo '∞';
                                        } else if($count == 0) {
                                            echo '0';
                                        } else {
                                            echo $count;
                                        }
                                    ?>
                                </span>
                            </a>
                        </div>
                        <div class="cart-price hide-when-search">$0.00</div>
                    </div>
                    <button class="menu-toggle hide-when-search" aria-controls="primary-menu" aria-expanded="false">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </button>
                </div>
            </div>
	    </div>
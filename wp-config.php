<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jewstore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?@=~6Mr3-Q@`iykb *;#p*#;d+RZ.C`H@i(%Vh5*>I?#(Hm~pR)?BvskfO$!m/$n' );
define( 'SECURE_AUTH_KEY',  '}u9FeOVE>b$*khA1<8Z,!&xb4>~xvdwc0~X8w9z^xNk7]r21bQ/+hNwqaH)YYHY|' );
define( 'LOGGED_IN_KEY',    ':KwV?<x/un4lu.Y7r#El1l[[Zd3H+:8Y]1N/:F:4W)pA<vxv.-?ut0;D^^v dFd~' );
define( 'NONCE_KEY',        'M4ZF}k5nIUd dx.{4LKeZj`<sA`4[0cp1E$fZlZe_C&44Vh2#{sfVb>;fJ]/^1vG' );
define( 'AUTH_SALT',        'P*J{jokTGAXpkgBx1z3JZxzJd{QzmVh0!RfZWH^0v+Ln5_]t[=pQ=1Iy4# xkPBw' );
define( 'SECURE_AUTH_SALT', 'HMPhm0=?Yz]2Q[W&qXjADN5-Ooar}JJpefTEEfg8>@3f9;P;9+EK)o7xj5aNr<D&' );
define( 'LOGGED_IN_SALT',   'U(Igkyj4oGg>3d#{gh@0jnE!dyBElE+uUYb.Kmqj=m5}@0.Z0X$O/Mzo21U/KtG0' );
define( 'NONCE_SALT',       'Z@g,b4DHO$X#p* SA$yF+:vy;1.06%n=RUg#nG }eHdEh%.l+%^Y~.gWwoO;c?Q@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

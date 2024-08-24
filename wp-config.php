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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'YtW{@HLq41N)<3%-Q-7Yg#by`Mf^>_$B&?2aGZ3Ra%yC0 8RR*sMp):(eaO&<@@S' );
define( 'SECURE_AUTH_KEY',   'z7Hd4W+Da>h?dgFgE*ks08V,1|77(*]9dg&y5aZ-qL4`v?wce[?+G)tPCV}%`*SD' );
define( 'LOGGED_IN_KEY',     'GI#7vY] J(r-<cN;)su|9zQ{K{a9i|yGD^,eCLK cEVd1V>&{I%@T;*jk3d$v(lL' );
define( 'NONCE_KEY',         'SaZijI_t#pV=Et5O~_/n`G1JosNlwm3Ay6$PV;`E9R2r{W^8uK8ZzN!Cy !;hWDr' );
define( 'AUTH_SALT',         ',M;CH^ ovUk!*}zWt_o+PM,$xMXjh;Kf0jJX3d,#ieh#mS0`$,*3*oU!/I=i;aGM' );
define( 'SECURE_AUTH_SALT',  'usPdDXfL^+k7:]jH)mJ]!L?C*cW&<c5sd=((Ic~>jaJTp2X[1(cu_cWn?T4q}&uC' );
define( 'LOGGED_IN_SALT',    '+/0n Q>%@NMmiJm9KH<56fT-/IOaBaSA?wl!mn9>`3u<Finq>Z7iR2{w_`y217OP' );
define( 'NONCE_SALT',        '9y:e|J;caiUA1$%T3Kdh/<=_5TZ6<#hs+fVThs}}RQR`0$W]_jvh@x50ZWe/#%VN' );
define( 'WP_CACHE_KEY_SALT', 'GoJ.f2jQYK4M(j Q1F;=mocS51rJbOH3r1%*p*b=]Z;EqhJW(#[xlpXU.F?@F,b1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

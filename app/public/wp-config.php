<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

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
define( 'DB_NAME', 'volt' );

/** Database username */
define( 'DB_USER', 'vijay' );

/** Database password */
define( 'DB_PASSWORD', 'Vijay#@$9818' );

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
define( 'AUTH_KEY',          '*Y#zLVXf=!5RxXpOat#6v8j5L^ZhFzREsG7)^KzUHuQ|OWh>mfK|JID8g% 1XK0:' );
define( 'SECURE_AUTH_KEY',   'b6Kh8G :t!pHxux1L1Xc|tn!v9m~J1{FsKg6lO )l=h*:4>Lz,Zge^7.)CC{&UnW' );
define( 'LOGGED_IN_KEY',     '.d(myf*}lsCSqpwT<pV!5][U~M:Z<tI>iVa!vGqb?A/YW~:?h0Pezxu<_g1N-7|v' );
define( 'NONCE_KEY',         'ykSL,) *Zv2e=.JS~%IDMU,^E-Z]K2Xun7FOct%7^i>E2yVQ%nr9Yfzw)TE3A8uM' );
define( 'AUTH_SALT',         'anFBtoC>N:9N0lq#iJFo55p=gfFhsl|rwIYanQ]0%C)i=>4u.QVJRR3uQb(*b!aa' );
define( 'SECURE_AUTH_SALT',  '87Bz0X+Nq2|9|`y,-4%TQzEh6zIKkE]b*R]pahEwg0%:ai**C88-^AI-mUI6WGqY' );
define( 'LOGGED_IN_SALT',    '=p(UwzD[PJdel6R >`BKfm_iI2Lt{|jlH{>J]:-r{}xRDLFZs[)CgFK$go@2cJ1B' );
define( 'NONCE_SALT',        'ygPPb3C~3=}<uy)F1k Ie61X|FaCQG{LyF[INS{IH[PFYMLS.4&Tt(v%l3I>U]o4' );
define( 'WP_CACHE_KEY_SALT', ' j$+#uLCb^bY%7,AZ6!Y51^`Twp;To~Dm/Li}RF?+wD-cLQ >ftfbkywwMX[_3pH' );
define('WP_HOME','https://codevaani.com');
define('WP_SITEURL','https://codevaani.com');

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

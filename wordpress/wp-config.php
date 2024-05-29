<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'p4-wordpress' );

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
define( 'AUTH_KEY',         'A75<U*Go3YV[dCUnP/)o^V@zTgx1<NR1C<%>2AFpS5}::gekAtRlwEq2PG6o!$%(' );
define( 'SECURE_AUTH_KEY',  'a*uMPi|NNz#cl+a:a x$pG@d8E1yu=B9lj2-|3$..-NIiWL6H!yAo>eP3{u1B7b<' );
define( 'LOGGED_IN_KEY',    'LGU_awtMyd:pgO0Jcf.HN~LQjAmQOfjVOH(~xw/K31.{$^:nZe4W7j|daPyfe<k$' );
define( 'NONCE_KEY',        ')rj?tFPWd1;~)QA[uPF1{XO&JP)~yoxRIQ;k`4fwNAZ{6nG4::Nai7SJiH~mB%?Y' );
define( 'AUTH_SALT',        '=H|[#>CZe}RlOpcu3<j*XsSi7kMBez%ZLz!&%LsxF>&.sx~3X6Q<w_6Q}$T%8[jc' );
define( 'SECURE_AUTH_SALT', 'a8O46iI`ZW.x@pYd,VSQRt/XXQRz8!gg[@KXtej5pUD[+-t0XRj9$nAF`8YeVWW+' );
define( 'LOGGED_IN_SALT',   'XX:WvO)Bb{+OUB{9{t!x=}M^)jU%#+_-2Z>:E$xNI HvpO.>LPF4C-!yWshvQ{K&' );
define( 'NONCE_SALT',       'd#e1J5<%W;Fde[Y7rq=3bFYu/+iWj)P:JXzTSe6Y2h-87F1WybgBI#gd5%~{`e2Z' );

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

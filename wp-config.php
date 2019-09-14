<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'higadesign_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P^aEJYeQ{.xfBYk@)m*swHHk)m]ca9JKNj`R{0nAk4khE`Hb5_zFGi}~r8ofU+R-' );
define( 'SECURE_AUTH_KEY',  'c4UGE<+v4ms&5wj{$i|$kb&Mzb_[}PJ6|j8SL `h(woor@d[[N[w 5WwP&+d9dX#' );
define( 'LOGGED_IN_KEY',    '[f<M0&PUT~%E&Pt(1:3]Ax-4D.Z23[JI_0>d}AGY({YLY`V%-oNL4r& Icnez=LB' );
define( 'NONCE_KEY',        '-4T!Rc*)H%xJHM`>nJz;sGkJ:k*!h|9O0J<*WG_o:z~;B3<.p%HXvH] /x:7WC~.' );
define( 'AUTH_SALT',        '2_$C,YAH9r)kq/M>X8ts35tult!>qbO.2mmt$p+U(tA)B)>?-g}bOI15Ci%AgNSt' );
define( 'SECURE_AUTH_SALT', '9A_s4>.C4s%9I5*<|5`/D$ [6);9KzgQ!lr(%JCK^3a~sp0vra)894u0*u[/xI8A' );
define( 'LOGGED_IN_SALT',   '/k]9bNV/?n+~zcjMG>)(Q}zMJa^,V01pwb;h7@k$%@qC5&VPq22mlfho:naED?^7' );
define( 'NONCE_SALT',       ';mjS?]=a3CnPti-b([ARQy,VT{Gc!=KV/Tb?;PKE3JK~2zE*#lQQ|?DPBSt|w._&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=XZ/Kk,c>DJhE6s@: NCQ/zR4Xz`^]{i,bgpV[;5v5Yl ZlM?@nJ4M/5ol*|BvNX');
define('SECURE_AUTH_KEY',  'X~sr,PEh>2NkctSxR+%oPw/V7?4-P6+sDEiC$LZz1il?;U5H)M=BzMY,4TCc54N|');
define('LOGGED_IN_KEY',    'eH>%IRzxEhl;q+*6cL4y#!=%rd>&80A1E/S[h[=[MN m6KLX4J(8H3HGpyH2!AOh');
define('NONCE_KEY',        'gPVHh].LqR>Gj1UF;ZXHJ1P)qg:<t=*8q{O[e]]dpc%#sKTm()}[D^ bzOPZs)CL');
define('AUTH_SALT',        ',77tqaT_?TH}%?*)8!u{ZUJ-<iR*G$VF!qB|,gj#i/4nB[2j#EXs*/0zfxxp5Qz!');
define('SECURE_AUTH_SALT', 'r3|4)/LFVf#l3]qCVpl`??lL_FI}mTQIEA(k,pvHwhi1z9ab4+B#]Z5Hn#GJfRL&');
define('LOGGED_IN_SALT',   'H+%Q3#78+y7_;{,w1 y}m)flt-nfAijo[7q!ZE`gWkbHtTTF=4@Oe)9@3@nC%wJ ');
define('NONCE_SALT',       'O#F$#^IqLeczZ,~y>vNUncx1t^J>?F`cUz5L-3VG7jx01B{F!RvhVEM3e3od*n:z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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

if (!getenv('DB_HOST')) {
    putenv('DB_HOST=localhost');
}
if (!getenv('DB_USER')) {
    putenv('DB_USER=root');
}
if (!getenv('DB_NAME')) {
    putenv('DB_NAME=ToursWordpress');
}
if (!getenv('DB_PASSWORD')) {
    putenv('DB_PASSWORD=root');
}


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         '/_9f%4D!zUY]-iJsrO:RJ!GP%f(~|JVLlq~uCyVo|:sfy4b%fu*}o{edvlb4qU[K');
define('SECURE_AUTH_KEY',  'sw}hsRS88FzGlr:tTxwABauql/J0,70A4mX|BQ0;F,ia90LiX*0qjsHV::@=~njj');
define('LOGGED_IN_KEY',    'I7;Kv-GO`eI~9/Fy~,V)$gA niA1980oy!`^j5]}TSvIXR1!d? zTk>CJkUnbt>4');
define('NONCE_KEY',        '(C)$}Ei3^aafA+x@956X#;jO?yLOYvAFcDm^xUxcIu@ZYDw9m;x[P/UGZH.G6L4+');
define('AUTH_SALT',        'Oj0}Mhr@dQR0z,}aBOC%hwIZDob5GKE7R6GU=k|%J]jy<?=v3$*I ]2lLfwZ&_>O');
define('SECURE_AUTH_SALT', '#.{#bM#Hx?R)8?*vLd[cNakZd09PgYPP/iIHDZf~LT+Y0#Mcpr!!H<IVf{L<YK4I');
define('LOGGED_IN_SALT',   '*d|*#D^OrC0gbWF)i-Ykd+^Q>bJS7i-(HSp&(w_QDmSmpZ<ORnD*;Ag9l2U7Z]TB');
define('NONCE_SALT',       'Bzo^yUrSraJu`y)gXhjRzzxdYk9gH$#aMP{z%w*1VSEakIO@ef!TBbN(gU_fN5Fp');

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

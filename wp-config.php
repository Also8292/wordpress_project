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
define('DB_NAME', 'wordpress_decouverte');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '_mVB}e1pFftg1_e3[1jE(#YjtDV&nyNZ:C,0*^ZTS.+rDS?2a;q:cbu&Bu}r(lm)');
define('SECURE_AUTH_KEY',  'L]ZO |P.n?SA-l:x90>W;2W/`X@g(.JuC#zol9vfhL;K$FioCh@`|}49(yo:%-U-');
define('LOGGED_IN_KEY',    'sfQ$m`ht@I}J6_ef}xt>*e&1L4]L|+y:jIdPJu>`W<3Lw6;1}Ar&4hmo2H}R[4k:');
define('NONCE_KEY',        'd_5}OiDvErc3tXBP@PKZp!t.%<xxDcZ)w?Yc0u~BOO#+}q(:$e*vd*,v:yj4tM6D');
define('AUTH_SALT',        'Mn78Akc.ovfY= N=iSAX,ozQ /]5J4`Q%8/S4N`R8u-&u6Ms.{EBj(>:&?qU>gk{');
define('SECURE_AUTH_SALT', '4E]K%Rx9<;)^CMcn9sa|_0^7TR(FYbBwaBY;HVgxZcBBzN)sc,M^Q.^W)Yjh}?6p');
define('LOGGED_IN_SALT',   'itM:`zFF .7*ZO[M,kF@hI^};zaQ-`%(>wQ+~86[I$k[_@Z!@F!TONs5$#l1=#ma');
define('NONCE_SALT',       'Rd)@LunUBpu/&XOR!e!F*zk,hUxGg=+nnhGi&ZCK?|l/x=_E:^p8py{&{VA;wKaH');

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

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
define('DB_NAME', 'repeater_io');

/** MySQL database username */
define('DB_USER', 'repeater_io');

/** MySQL database password */
define('DB_PASSWORD', 'k3ll1344!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']7eqX]C{U.ETlQ+Vj_rL52p<7o+N/K0*(zX1pO=vudJO}B6]Hs)?0;$GDugh%+ZE');
define('SECURE_AUTH_KEY',  ' ^]:2c<w*+D+5:Iz%vs?v~zpuT#(B-,BP;;it1Jo8{{f!x3]~(|9y(E@Q7eBr2/~');
define('LOGGED_IN_KEY',    'APLc^nhy|(T<4M&m&R6H*JqOJ<S]HkE{{^3]Y<FXxp:IZ)!{|*$J+p`Yj5pX0JN=');
define('NONCE_KEY',        'R>T5|pX8!S<q]ngPkfc/htU4h{ms8}J9=Jc/Tb.yevh>,BbP(>./7_;!3wCdE&oK');
define('AUTH_SALT',        '^S-n~1H)naIGb8 `N7c;WmBr~+t1uf%s#l}jVYhK/Ic+-8Id1**hE{As7SwxDqme');
define('SECURE_AUTH_SALT', 'UdoM@Sx:z^L5]Vw}+dmPx{e6q|nD_8OD27xBETY_Z+otrVrQ-Q`Kl|Bvc6LT8(>8');
define('LOGGED_IN_SALT',   'prO!C S5D(k_-k$2{kz6r|0YnGZYZUl{Yj@iVhOC?O5}I~ZKcGy2kLx}6[a5VmB)');
define('NONCE_SALT',       '|--.jWC3^u99uHI<tP1P[m(c5|7kNi-JzbSQcEuF&Q)h48a8x]Vg#+iB3R%1dCN1');
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

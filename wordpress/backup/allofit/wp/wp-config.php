<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'repeater_wpPlay');

/** MySQL database username */
define('DB_USER', 'repeater_bigbyte');

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
define('AUTH_KEY',         'oQ&!tzI#3=2|]YA!1|&{8L*q f(W8BEr[@)}P@2v|]9&_*FLlyp?_RXt22`2o+{,');
define('SECURE_AUTH_KEY',  'OgF@Az6[f:s||YIRq*P8@gs`fyc*-+)pAl2&~$i&gf^OoH+>W4s|O{c8/S:#KBX{');
define('LOGGED_IN_KEY',    'gAw@t(EBbY?dKZYr`fBfcdZsXE%(7e7vk +;S5[Gq:Z}B*y}gl|j7+8>b ]/)<bq');
define('NONCE_KEY',        'LV0eYdmz^k9-~D+QV~HX9AWjOEyR_qw_8-nc8$bpT9a74GumtCtUMe9_b:t/v>Uw');
define('AUTH_SALT',        'pMVx_X1T]Kp rBy:Z-&&hpeV4UQmQE<*N3_U> `;bZ+o^RV=1;5?;6|h Tdp/YB$');
define('SECURE_AUTH_SALT', '-fC;lq 5zjxhN|-ol!UtoIqhP6ULD-*2+H?E{p.v6hM.5V-3`*aR->/oYuO781xn');
define('LOGGED_IN_SALT',   'h(CcIR3PhXz|o6GIiH7~+MRX@^6.{:-oq_!,Y@k!GVn-ZA(WD0q`P+zTQ^_/aBPs');
define('NONCE_SALT',       '^sbkc3||qyXic-g13#9H &.N+hBqh-$IDJU2ef|b~DJP~A!3{M0@m&9s6&dk2Bl}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

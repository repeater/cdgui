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
define('DB_NAME', 'repeater_eadms');

/** MySQL database username */
define('DB_USER', 'repeater_eadms');

/** MySQL database password */
define('DB_PASSWORD', 'k3ll1344!');

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
define('AUTH_KEY',         '+2=rfhnwr{s(7BOB|T,V+,un-n3m6m`&9gos+?%s@Z%vI.a]J4M|B=%n Cm|Mzt+');
define('SECURE_AUTH_KEY',  'JW$RkA(r^!#DrIZ[?/ge>cN8&3Rg(smMIc{N;#$q}}{M|yjN60Dwa$Ns3tgL9`FW');
define('LOGGED_IN_KEY',    'P-Vvl*Y39=$wq2c0u0=rPe[wLG<)|SSr;+r`:Cgnhc?93=3[IPycw}XV;#$nMawO');
define('NONCE_KEY',        '2igW|1#3rs)F_I3NQ Tg:]n7E,LSSklYU):,m=#,P|qM}_.hTB,<8)}=lLP-U`!~');
define('AUTH_SALT',        '_7E`^D#i9[SZ+-iSIvT*+ih1])wMwM!)/G(V0|6nuk]&O8`~}[xkc[.6(Ej5NtG0');
define('SECURE_AUTH_SALT', '}{%}08kCNy-=gowK>?iHL+o+w1Jo}%{v|EHXvbTj;mB;yB@1-i],hWIHTP@1bfb=');
define('LOGGED_IN_SALT',   'K[SB82,8p;RF:GpGwr`B}Dj+HmFDLw#iR.@}#xj!hmsBn,ki]cKPE^u_#x5bv/(B');
define('NONCE_SALT',       '@9v#_b}u @B9q_xmt-G$+}9*&WkYIfY0r4VE4]|Z42CA-3MRk8ls,)2aQ6-TINky');

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

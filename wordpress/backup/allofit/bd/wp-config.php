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
define('DB_NAME', 'repeater_briandelgado');

/** MySQL database username */
define('DB_USER', 'repeater_briand');

/** MySQL database password */
define('DB_PASSWORD', 'ThisisBrianDelgado');

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
define('AUTH_KEY',         'ez+>|8rg`8Yb5OCHm>m~;vudDyuwp)ImVAV,aSxokr;9PJ1ca9z2}z5483[6cuMp');
define('SECURE_AUTH_KEY',  '9.s!vtI6td3FE{9`sd[4*VXsC)3,y1T%N%%HX(O*RVRGir@&?r*OV@7?wA:!Wp*Y');
define('LOGGED_IN_KEY',    ' <c96*<}YH`(E,d0^Q.s;)&_NS;2!Aum6uH=P;fGVLyn1TbJ/B=En5yltp]#XkV]');
define('NONCE_KEY',        'Ngst|R)4y$1:efv!@,E;;y7%K<~wxzYm0SB-+-B]=Y^8B{p ;+@ZdmH<q#V`SF$f');
define('AUTH_SALT',        '3SeG06YnyT2&fEVv3(tqd zqfd48a@#_*TT${wF&_ +pp]Pu0ci~q>$g|E)adaed');
define('SECURE_AUTH_SALT', 'iy kde^KyOD:G[s4c:5GC_J;~uB| WeRo([MFU6s{1wyF=2yC/E=w8kWeQj7T_9l');
define('LOGGED_IN_SALT',   'g,,fp`fHR0L]75xXF81y83nc{ 3w^4`b9%xXz2(wmu+}XKx*-F^g-,Edz@pUV6dN');
define('NONCE_SALT',       'Dz|2<A. _@hsoA:OfLS#|A;^iXWlT2_5RPgPb6_nb]lFu)G-2.p)8c0OLwNUyv;a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_briandelgado';

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

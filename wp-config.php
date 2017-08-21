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
define('DB_NAME', 'dochoi');

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
define('AUTH_KEY',         'o<a-O72S?z$~Dl5b@oh$^R5O&H$#HHBRnx{I6;+W!Jwc_e[iyk@1UyUfnX7kU6Lx');
define('SECURE_AUTH_KEY',  'P(&]L,;]yo_qBmXR^i%X}l3|ZE+nJk>X,C+kdDN{yqj}gGy !g`F}Z?j^Te6XbC#');
define('LOGGED_IN_KEY',    '$%2FhjmVE5MukV/Sm;Ut3.:jmkYfaxsn*oI5Oq$$@9ZJEB/- m3429b3)e[p~|,Y');
define('NONCE_KEY',        'lQ~bw{3^grX9[3?sZ?7 9VGqvko1~ vT~3FL]*o-tmEw2] W*KM7ftAA?LLyYKv8');
define('AUTH_SALT',        'GaC+/(Y!Ihr;#N_Y Pe^tEqx6?#l!HNV)S7xkR5jZF$$.b*-+HT6M_GjPI*/mK}&');
define('SECURE_AUTH_SALT', ')b ,MaO?;ju9XohzB WMnwpud&#<5q9;M+jfr59$W_48<rFGJt,HoFrdQ5$=6C8+');
define('LOGGED_IN_SALT',   'YTDsAyn3C6/B|[`]H`S4J[_-UTInZV7oGxh4uoro)S|<>xh@vnIQ@~g#<lXSKM>&');
define('NONCE_SALT',       '7|rja[.#XT<jid2[t*P%}trV%4!U=}ng5zuH5vJ]E3Xl#!TF-!YrPaYFyWr]Z+=4');

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

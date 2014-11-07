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
define('DB_NAME', 'interactive');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '%h(*RfqXaA$xqD$}[S1iE:EfNHB?+eA>t`Wni|W7zEd9yF@{4@d^*?2|K_i#htCP');
define('SECURE_AUTH_KEY',  'j7m##-^]9VB<p_gwEk,anVH+2&6><W:jW}-DaT~&$6!p6cw0%!,lt^>{.#9/+{n.');
define('LOGGED_IN_KEY',    '3M!j-p511-0+Q|$v^%_5rm&$qXq~a#e-ldoh|n&H+E vAPa]l=w3$x+]I#UAvG?-');
define('NONCE_KEY',        '&3m1$rAgAwGh$Iuy$JR^:8c[P.R&]co6lL[iE9|zu8Nu$&t1yTH@m]Fd#jI YrB8');
define('AUTH_SALT',        '0uL`QCOkZ9ZQ;3gfh|6j/t}FmEV+([1|A} igm^T}%1m-_I?r)cxj:a2IWUK.H+h');
define('SECURE_AUTH_SALT', 'Bzwu6bLRJ|w/OH|},`&z`W18Al/oE:a*Ppe-]>d:y_px=:=<5.Tyy!ubC0S6gYsx');
define('LOGGED_IN_SALT',   'FEp)w6#`gOg-I@0z15Cl[Bqm[+9M}gJiNe9Prsx;y[T06jd A#f^N6E5LA.?Ko@#');
define('NONCE_SALT',       '8~+N{%_`a3&P--`dlEjUG#*n-ysJ1+xRl3,$gkE]1]s#_//&)<yFGu*Q|<K#zWw5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ia_';

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

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
define('DB_NAME', 'bitcoinfx');

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
define('AUTH_KEY',         'TDAS+!9EK2pfTj%@KL`o+LgWe?-(_yt>uD4.X/sjn>tbIo%5G}g*i5OcQhK$OB`[');
define('SECURE_AUTH_KEY',  '5f9GL8vU<naOg.$~`Uxr}-gWn_{aSXb:(|:Wbg74!%a}(H;ayAE^R6[(--d&:CJ%');
define('LOGGED_IN_KEY',    'Vf_}]BOO_4LRYJT;u%DEWzfywgzu%pa((wAgf:*B6_BU[MZHURtdV RX@Y;6zu]p');
define('NONCE_KEY',        '25e1i*-ZS.=YKKkU$k)nT]VBN[{Iw,%lP%}WZOa$9I`GNj0Y!e!8`PgO$}uyIv1T');
define('AUTH_SALT',        'tteP>qt <gWRirem9NbJsGn6ZRpcc}#cTA]r;8~/5w>*oa:QV|DN|MJis`;^ tt@');
define('SECURE_AUTH_SALT', '/rm%j*NbafV*F[X;@@{GyW]X4:/ZEYkZj=2~3<]B*nx!<UQIqWKD,v5wzdkL_ooY');
define('LOGGED_IN_SALT',   '|WWg)Zr Q.zsu<x}K[dh4q1epF{8-#>m17sCc~p:N~<k|*@G5R9C[@R{~+bS/c%u');
define('NONCE_SALT',       'S)2BS*M:{i(;v9px`QE9-^$bs6d&i0@ h$nl3$BQXFP}0OEDQuTC !OX8x]z}{)U');

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

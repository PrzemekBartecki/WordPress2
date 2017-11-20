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
define('DB_NAME', 'PrzemekB');

/** MySQL database username */
define('DB_USER', 'PrzemekB');

/** MySQL database password */
define('DB_PASSWORD', 'Przemek1988');

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
define('AUTH_KEY',         '!^<,g=0Ddsbr737:Fx:hwGa>e4&KqGx=3Eq*,:`ykM.O%2!&qxv1CPYwH|S{k4RD');
define('SECURE_AUTH_KEY',  'sLKxjpCGA|rgU:FE<_`POl1.>Mv|Bpw,?B$v;bScwwCBwA[Kga<?,cz((`aL/|OU');
define('LOGGED_IN_KEY',    'zYnmJ:8Do@W/zJ$|]6kchc8&%qmS:xgHuRPZ*!E~7tuqiIv?-0`1X+(tvc)oY8px');
define('NONCE_KEY',        '/G{<:k#MxS%:J:3o#$fk+_z6Q7TwZmuP<R.Km,B2C4338{j%:}=N#!(@y+CaXdRk');
define('AUTH_SALT',        'lD<V.%J<y:Utcf-(Itu,%I&C:$YQ;(sKIfx#{`$vy>]0HW0W50b+r^geo,t)(.n;');
define('SECURE_AUTH_SALT', 'fKPZs`^{$kN^y,Z%HvenVs=q~.*f=~7Z_2v.sG0Ijk.;/B_V$NFHA~bw.@~HWJs~');
define('LOGGED_IN_SALT',   'x,FQcsfIltLRKi: Bvg@Jn14yoyle+YbGhv| G/.%Py+aWL$X`&u1b4dSC2vm`!|');
define('NONCE_SALT',       '_!~~>Bs bC:VA9QeCd%k-G}X3.{%1x;ic}?t.1|[@53@AWtdr41`6Z}weKDl]/0p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pb88_';

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
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

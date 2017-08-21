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
define('DB_NAME', 'la-pizzeria');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=#Uw80K0|V}Z(TFrU4Sn,Ye_3Sw)-n-|UQO9fXM>ty6NuQFQQ(I8F~|VM8YGobL%');
define('SECURE_AUTH_KEY',  '5Dj;7`a mtIt[C!F?d$PL_gdR4hy {t+XeoMEcD|sQ|SwA=}]B6ZJmc- s}XA;dB');
define('LOGGED_IN_KEY',    'r_%+CC<a+^,vtd87[o.j48]4_U%)%A,vEUGIs|D%^^uH30w}!(=Xd- =>Ypx):9m');
define('NONCE_KEY',        'rFprFP;N**WaL4l5G;oCB4:%w(}pN`N0o^9Pk#M}*,3msz_stNfY~7u-$?Leyc1d');
define('AUTH_SALT',        '5~n$TTbi!1`7h`OnFM#|Ria;pO)0fk^-Z+1j+yfNHju{3JSa!f#BC*:(n]F#5({*');
define('SECURE_AUTH_SALT', 'VE8(K9ktZru}yYwW_Z9oq&{Ch` <1EDx#o@`sK01,5S~qGvs06;0y[0UpKJEaZ<h');
define('LOGGED_IN_SALT',   '-3.,kx,goRv`*eB:19_V 7{`3cww5`DkY&? 0>G;Z(eUyd[84;R^ABGgY?1dYvni');
define('NONCE_SALT',       '>GJzi|U^p(a7)]UUu}C1k:Y3{U=9r~Yt (^*C; @4nTq`$*9]</q6Y<B=Xq##INW');

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
define('WP_DEBUG', true); // put back to false when done //////////////////////////////////////

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

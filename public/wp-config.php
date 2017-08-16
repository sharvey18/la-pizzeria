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
define('AUTH_KEY',         '2YZ/qWU@j$L8-7}kJ5A*Yo0bMg{6Q!#&*_-iHpE{dV&eD<PGEcK$N/-6YKuZ-:B_');
define('SECURE_AUTH_KEY',  '7: N!y]YS0Ilz6kRTPKj~|z?J{skb~:L{1w~wG)_Rq#,+[-&~+tTSq[<2I!4B}EJ');
define('LOGGED_IN_KEY',    'iDadQy^/7i%uE)BtOu{J^QNUaYHuaT<N7RlY !WQ6X[gS[hSgsF$JxUn3,#D2.()');
define('NONCE_KEY',        'B#o_bla8R2b(zL)*k6!2L%?n#q!.R>$ZU&G%g=7=qEa3Z Rwz@2Q,e_p3L`~X e@');
define('AUTH_SALT',        '9sY&8m&&MsVuHWY=xYfmL-_tsy@ GY>}<4+pW[@)-aRDkO>~xCYIZXJT^2jeg{a{');
define('SECURE_AUTH_SALT', 'Aw{e-%w.H-0b&1b>>?IkeAOIXtQtBm6WAEiOSq3qMg$C1%c.U&R5r<}K:Y*yICOb');
define('LOGGED_IN_SALT',   'fbt?#}NgzX(>kyJq)X[pYy6+}xkU`liaFfaIH}Q0>l5])`I<#eFd<puf=S|5FJ^m');
define('NONCE_SALT',       '?5|vde)/f7*|g$=`L$,:/7sLw6fPALKkFUd.& y;S9qBny3_8@k&nj6}$3rYiz1E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pizza';

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

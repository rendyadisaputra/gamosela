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
define('DB_NAME', 'gamosela');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'p0o9i8u7y6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z+=!b1Es?jro6HLP7$=||9nKj9[>4ha<((@q~=Ekas)Uagl+!`i&qV$du1C]|na4');
define('SECURE_AUTH_KEY',  'qCcvz/z;b8Q875gO)~QI!|Cou@&zS(_Ovr8cfrtsG/W#fj!`%jDXqJr2>~nxeJk_');
define('LOGGED_IN_KEY',    'r=0LWl.[b8]j 2`AB|c_5D[CU^@K]@.#XlDkxG9!M`{i4,y[5}*5>+(_hF&5]ayw');
define('NONCE_KEY',        's::=W^n0`zGwo3{m%_DN/bWql3jE/rJ^(ov%Lt3P]~?t+1Ijyp+A#eY]gTp68pic');
define('AUTH_SALT',        'u.@eV,_)<sxWwaA7I+i,<s:_{r@e7nm)Hn#ZQ.tuEDcJ|hP])/|0QT:lP|FR&}l0');
define('SECURE_AUTH_SALT', 's#z7|8q$-5{7E.1p:.ANz`@S?Y)sxDwM!D-w0E`*t$8-D(B)=f=xlxl@Xg$U&G6l');
define('LOGGED_IN_SALT',   ',8Q%HYdwm<a]1U~vG/Vwv%h(:7?kKgTGYTvN*9z6BxExes(BP3&P; jsf[R!yWIv');
define('NONCE_SALT',       'br#-t]zH!*<JFSM2z)5^EZvWb|T{(>zFco=`oPr[7`^gkLg?$V}k,71vh`JQsEE7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gamosela_';

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

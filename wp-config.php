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
define('DB_NAME', 'ecommerce');

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
define('AUTH_KEY',         '}.hi(`gb2$xaWke6H9YZz+j1_^=ag=dMpWBtR?[jtT##:Kx^pM{t|Z]?_*Mfm ?l');
define('SECURE_AUTH_KEY',  '}m=7ZO84~_2e<$:u$o~$X4icXQVS)Hp%ye4[dc;9Y%kz:2Kc=f<)L?Oxs;?@hTQg');
define('LOGGED_IN_KEY',    'hOWA_}-:b[9QG uAwcBLQo:w5c_~9G%5%JmB6[RZHSZ-9rqe48O,0It&Atf q?mf');
define('NONCE_KEY',        'y9leL8]mVi>2b@RaSwv1uwm9_-gGo|5XZ3~0FPZ?F r+d3.@N?/GPcCpB[])z1iP');
define('AUTH_SALT',        'X/4(INe@PC:y=g3m:OMTX!p? v)lU5rN{1}za}AU9D$_iB.>zOc&~@` sy/JS/VD');
define('SECURE_AUTH_SALT', '?:2XFKh^*>^iIykFA3#RC]>1_07]G_*6`e]1@kIZrTa*:s!Z$gTKuR{t0FnhrVxP');
define('LOGGED_IN_SALT',   'Sh+z{MhP<s)J,>N:U%11@.>ygU-K$BAKuFeV(U])_/_ROz]]OS|,NK9Mb5jOq1X.');
define('NONCE_SALT',       '(ZG1hsL1|bjO70|2x?&8b8)VrP#1_m66q:WCtnxd}yiu7#JB58woci ZhqK2Kd(s');

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

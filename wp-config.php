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
define('DB_NAME', 'otv');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '%,/wvPX^AK;HGa=Z:68$cA-0,K!-LY$eAvmZ;)bv68pj.TiMc.q=K<0R}ZcIXrXv');
define('SECURE_AUTH_KEY',  'aCQrf#2oQ&vyK4(S*9t:ca!=!7&;ObuprKh0~QI$jN&USL-ocmo9 b=i^:yzCON$');
define('LOGGED_IN_KEY',    'py|[-VcGA~<HkdLjh[>:-LYjpt4d81fX4 (<a`Z-Wjfp25^.ds3_*a)8=`ZuaL]q');
define('NONCE_KEY',        '@@0|3-.07n)v(Vz{RxiG;|0Cx_W`Qq]DSY[#?:.#:N)5$)[-n.)cmzl0ZZ2l|Ui&');
define('AUTH_SALT',        '?#:-3Rn9{<.V*4azJ>nA? D{w!)k`ZU9i<r!VF/f%uob]|I!cE 09`Bi&GZ$rOb$');
define('SECURE_AUTH_SALT', '8WzcTK47pq/m#MkM+4_+*|rNxP%)D<!-,IW_-H,az+9fs9MCJ.loo,rAwRY8_i||');
define('LOGGED_IN_SALT',   'E~x-*iG=m.]t*&Vd;t%#>P}X;`wsWye||2yv+z=WG:+,<*bOzWC3G2:1 Xb`c/yW');
define('NONCE_SALT',       'Z`wTqM8KikaG1JxG&qEg)Q+g(zk#%MPq;%}_VdL||t*|aVmnnG;w]e]-CLZGFLFk');

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

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
define('DB_NAME', 'wp-cli');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY', '3FqyotWMFmUlob1rTfdaMgSEei1WytHW4JqRxgZ/jrriL++D9f90rmZqkvjXwiKp');
define('SECURE_AUTH_KEY', 'Ql544BxlxmzQQ9iPPurYIuYT2cz+cYemPZcg42mYo/teYqXC+4KATeBJxz+60BhW');
define('LOGGED_IN_KEY', '7GiTv11dL/7J/g7Lg/FF1tUkUTLHzv+l9uAEsYo5S1J2e5RpfEcussVVxJDX5DPw');
define('NONCE_KEY', 'wQhNGTgdwTdDF+cpKTCoWqR8F1Mb5o7/l5k+5lhnNw5sLFENh6Wu5jq6emDKiWBp');
define('AUTH_SALT', 'v7H+nX303wNoOhnuqmygh16EPs1LCUQoR1uzAo4B49Cy5lp6C8dI5DCajplzzZNa');
define('SECURE_AUTH_SALT', 'Qyrkm6QFSDgSvJXtaom0AzSX+T9KPggZ0NDuFOsHecGtvnQ3rPt4P4Z7rA2FIS9H');
define('LOGGED_IN_SALT', 'qd3F7KkHxNTBlLp8QrMq04Bnzqzk+neT8wqdCNMtpzoSUG51m/YZ13XH2kGTdE+L');
define('NONCE_SALT', 'nWlRiTJNCwpc/jIJ3KianI9C64SPZeDr7NMSuQdOU7nSIX3IwUB1tm5YG5u15TdS');
define( 'WP_CACHE_KEY_SALT', 'J:TXmfu,_MW^cN$;|$2L%I[g]c|D@|EN2:kig1b&)<co*$tBh qCh$.VM|vp#S@2' );

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'wp_';
/*define('FS_METHOD', 'direct'); thêm vào khi cài plugin bị lỗi



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

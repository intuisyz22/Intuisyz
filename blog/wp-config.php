<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intutive_syzintui_blog' );

/** MySQL database username */
define( 'DB_USER', 'intutive_locked' );

/** MySQL database password */
define( 'DB_PASSWORD', ')RmyC7L2bpEp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A|V-Qb^ntcra&%{ U-`MWU8)r,,}S.H3nsS3GOduxe$qjUSNt K-+vYK~sBDd}:2' );
define( 'SECURE_AUTH_KEY',  '{/~*Q*$/K$Z Z?]A:Y 9}]*qvJm$MX-@E82q=.:E!>,XCz8:&VI8|6zqMyKEjc@a' );
define( 'LOGGED_IN_KEY',    ']y?g`1A9s=8M;.,ZXULPXBak}*<&0%OKPO[^LFUi/nj8Jnn).}DrLwu~7XzL[ig%' );
define( 'NONCE_KEY',        '{Zcj7;lGXT26$(xlK]b5GTAj{W|{i^lE7j3;)XoHtl#h6{hM>*%@ g~I,/eL?<Xv' );
define( 'AUTH_SALT',        '<WB:vZW]xYGP$=wZ%W1?d+i;Kt;.x2(+M-~6h*Qw8rGHyaH)H-_I}E+Qr|mI}Cbp' );
define( 'SECURE_AUTH_SALT', 'U1:qdppGl gV/e{wN;~WpjQXI?&;%b;xlXx=q_-0!F`9 NquFY%q9DkR&4;; Pw$' );
define( 'LOGGED_IN_SALT',   'ccD3o96vK)#$7k|iLqpX^d*w&eVao(xJ{I`z<Z1}@/P+tZh7=SPp,:lY9R.Ke=-[' );
define( 'NONCE_SALT',       '3y|FsX7]YJufK=#w<pdMPY$u)@qq8f1rj-4`>L| DY)r?VD4Z_N8T(<Q3dl @`{4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

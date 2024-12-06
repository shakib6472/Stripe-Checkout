<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'radoan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^V*FgU:y,$%)x}tMAf5O-R@~Lw8Tecbl4IxjiB_-*L`(1t|y9Nq<ELcHeS)o|V.2' );
define( 'SECURE_AUTH_KEY',  'QjO8+G)u)&!U3i(Ek}BXHc]Dwh ?,@yy]ujG^|%lsLa.I-uhEOnJrZlICHEwiiKc' );
define( 'LOGGED_IN_KEY',    '&&+(t]3yqUL(<Ja(k*qN#yWhWxuR8~;0Fd~TWR&2fES{[xAqvE6:ML<^;+Gy}lDb' );
define( 'NONCE_KEY',        'Rr|e4&:,8J3KIvR,U</]vu6a0h%|k1^XiK@X;kpzLf<,$00/d/-gIAD:S+IuZ#Y5' );
define( 'AUTH_SALT',        'Kq{Gc;on!#*Ouk!>w,rzDL|w}}2~`PQ!.S-[LLK2jef-lW^Rt}VNVQ[:YTjW7`Eo' );
define( 'SECURE_AUTH_SALT', 'mJ7FtDCC#+Z}Je4Z$^x5%Y~p^liU~?z^jpT+]Y1|c~=AL/!+I9eh~IFRJ9~S<cxr' );
define( 'LOGGED_IN_SALT',   '@=L0!N._cs1EKYs@.oHw0_mk=&U2pL%Rf2&MP&,k8!m0XZVu,dwM`I``#dSJw4I^' );
define( 'NONCE_SALT',       'h6xD[nFcUox%/YiKU*P6uW:*TMUhB`|hr1w,q8.;[&$?+w3e~*nsjn6{s.CyKVD]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false ); // Optional: Do not display errors on the frontend


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

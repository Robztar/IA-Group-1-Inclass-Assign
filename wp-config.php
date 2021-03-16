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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aKfids>}Qrm#]mTNIgo~0SFLX)>+3PQnE*9nz7H(A4Gjt0shE-#y$}u&P0+08!j_' );
define( 'SECURE_AUTH_KEY',  'KG;*@3f,~i`W^dl6O`@}&!u*x>qkCqbM;GXCnc?~oE7Jlgazgu!VR7Wj,guk7I#!' );
define( 'LOGGED_IN_KEY',    '.uHgG{CL+,>m5J5t&.^{]B&A0%]QV*`!p6,L#JsoIzJCWKqU{m6:4mGk5:SYzA,k' );
define( 'NONCE_KEY',        'W4=h|bgn)`ITL]Pxzlr_;tRv $PI.fmCzfdK_7bFcMLr+?MLFQxAMXMW9E^3K&;!' );
define( 'AUTH_SALT',        'j6mlJfE2epN&:,7P/*q=TEq!@j_-caQU:FEqb!VY+Kn#th{h1%?dZ Le8cFOR-!/' );
define( 'SECURE_AUTH_SALT', 'r`RG)Lz(W4oc`[BULKs{#+uly+Dr*,Kn0` %uG%Ihrk$E]`7<Qv7T/<*UI&[>(7;' );
define( 'LOGGED_IN_SALT',   '_^XI4.v$?^4XNyl8ys6xbxvA2}yK1Fv6O6s&Ha* PCx;:9bi%bh_*YDX]T+1g)b<' );
define( 'NONCE_SALT',       'Fx}Q7@? Qo55)BX+mQ!5(9mgf~9xR7 c8GgTm72%WKt>M5A9yU5lTpdXSM5Ms$^B' );

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

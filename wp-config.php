<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'ecommerce' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2V2Q=O5[dl]ccM M3KAar0,z(/V/k&Mr5aD!V8c#]%VLA`-(Nu0fQZoW/x&rZ4.5' );
define( 'SECURE_AUTH_KEY',  ']l^;**Y#i&2T_Rby!5.:Z{u%KI+LkMyeU|])QiD,5o/kOS:Ty8NNM&mKTjO7&Z_I' );
define( 'LOGGED_IN_KEY',    '_<iYDX7t0V/fkj@TTSJrTsm# p=GN^jRr6fC$*V`A8jliy8/n+ammH/U!S;r-X72' );
define( 'NONCE_KEY',        'l$zaA66aYh=p7!)^Wie/sj?JbB.w16O+Jb=w{{xZ{4+)dc&@S9fdCC-X,/=wya(i' );
define( 'AUTH_SALT',        'XxN{@lYE?#H`WzL-a|@m7c-;`Wrr0ryv#)3+ _{zB?XTmf*Z|MWo^Y4j>l?!|j[~' );
define( 'SECURE_AUTH_SALT', '%E8mg0=2C2|=<Z8<e`ic<14E6d%9x:gSJ*{Z!ILmo?jrgH/Iz%v0MUrt#^rY@VEE' );
define( 'LOGGED_IN_SALT',   '41`*ai#xHBLyxwZu6oUz7|#sZnmdM=z9uz:bOy-DCnoCw?/*Ga<CL/QKvoxX0vIF' );
define( 'NONCE_SALT',       'u(/! 94nOG:9x^9f<DssJDj1}F@aFk,VH^W}YQk8dk9 2c5kDSU#6::-52z/Pw^R' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

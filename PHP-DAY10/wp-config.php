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
define( 'DB_NAME', 'food' );

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
define( 'AUTH_KEY',         'MRN=iPbizHU5WKvJ}{]P&Jxg{:%b~UQ8K>>[ak#?#2;IL*|>p/6@4-T^QR~kD^BQ' );
define( 'SECURE_AUTH_KEY',  '!JF-,-$IJ*]u4)A{xKP-K<jff n<ioHodi[R,Y6(*H0R=o}uEurT(^FtIak*]@zc' );
define( 'LOGGED_IN_KEY',    '4/fWpW?8Wj]0L1jTI3sg~*)c(Ou(9S^TBlg[!DX)8m608*?tRK}o>es^$nGx*.ny' );
define( 'NONCE_KEY',        '<M&#8l?:0B0RC)dd`^dpg1KSD(}WVz5t7`f!!E;HfYG}rhJG)b-yQi8B^6J,3:H ' );
define( 'AUTH_SALT',        'nqO7|+*:g-Lhc}zMT[|l`6 GW Xo&x?)@F)Jf;GLvHM61Q&F.Ucl]= OxH}u)R3z' );
define( 'SECURE_AUTH_SALT', 'P>xi9Rfy3*~Ik3c]^lc^/fXY.h3rXXda>uRrBFYa(Zd L9&;0=9~vwq<`LiFl,L=' );
define( 'LOGGED_IN_SALT',   'O*j=*,}IT3={(wxC)<z}?mLNnq,@m#4y&y}3]R9@pd`Pld%=V.S<%7<(@+o4s3T3' );
define( 'NONCE_SALT',       '%Nr[Nt<z(Eo$~tQ0<nxt>%fn#w.1]2FS6Me;No$q;XP|Ys2(:7=k-Smh@j8m~95-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'food_';

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

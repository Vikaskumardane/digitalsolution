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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '%@O}AP4Kk<w<5+A*^qROcVRTw_ALG85]0iGpgnA)C3WU:6_.-_.%G/m)^;$.)OGr' );
define( 'SECURE_AUTH_KEY',  '/.LtEQ5XL!IRON#r@LHXPU+4%n_E-TAQ`P[#e@2nHL|.v(<x|u0M8>n:Dyj*`(sD' );
define( 'LOGGED_IN_KEY',    'WGyNS.rr.CkPg;J8s pv7U-YDBCp%?Rj3O3d+yTnSOzrmZ{u)K$>-xfrWCS(zC@^' );
define( 'NONCE_KEY',        'a5.~fBmJ/Y%9>MU1`i[3#~Io}9u(QR(j/Y  S#]33>C_zq}i4]o&KH:^2pviXFZK' );
define( 'AUTH_SALT',        'D`gY5hC!P;w#I&,%Qc|S*tC/4C*H5?Cg:*| VQwD{!ZQo=/8{Hyg^&VisTMs)73I' );
define( 'SECURE_AUTH_SALT', '^r+F>MqB:CZ9/%U{9_)6j`xvXWcKEnAc KFe23GfBF!w=@i!)SrkItr^@HQw!f3w' );
define( 'LOGGED_IN_SALT',   '4O#-dyn}DZ:m:Kc)-GWKtVOR1l:q0&z=v(iL}:MNARQJX%{T7WMaFZR*oe$*tTSB' );
define( 'NONCE_SALT',       '&,?CG)vyQ5:CB3C][0LT3d.>+y{#k)yqwG%J%Zp+awDo.ax~Act,5U4xJr~ymMcv' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

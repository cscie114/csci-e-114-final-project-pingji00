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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'I<5@L6M` rAf0TfJ10y~(fG?*sM=7g0fc)0OU*CH_kW$[bj[{H[)Nyx-#-=mDeU1' );
define( 'SECURE_AUTH_KEY',  '6D(4w_<X:qyW!c;L+G;#sz4/K?!pv:{3nI|NiCWlDSe{*Epn-hKT$b/omgS+{/u4' );
define( 'LOGGED_IN_KEY',    ')=oq_/J+#qN-_P>d*0xV]Xg@D+IDVk]F@GVFl9y O3%B]Cr- cl _w1J:=:-+[a~' );
define( 'NONCE_KEY',        'i^2P)Y%J<h)J1,^|>FD`XO.Y@(vE$zo Xqzr`m7`TWu*vA!(h*,CU[tewFtSKTx|' );
define( 'AUTH_SALT',        '~w&UVoy~K98kV?.D-x=m1_wE*:C*-Lc:?GBTsDMNM| 86h;nAz&34H&:,zOsb6=!' );
define( 'SECURE_AUTH_SALT', '6zyprP`4OyjEs?Vlhnd#jJWh8CyAnj,S~+3&qA*1O&x:ph!H6dA68]x;Yz]g1M*u' );
define( 'LOGGED_IN_SALT',   ';9pF+Lda=rjY;.D@4XdHg->B)5FVIW;IQL:?}_q-w}?z~ a%)fScT`td%ogQ4h<q' );
define( 'NONCE_SALT',       'R18>O+dDQcVHMKtOc+wG-:#&@i2Fil>R0%FrzuM|EyX,2#|AKS;f^`d-^<{szOcK' );

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

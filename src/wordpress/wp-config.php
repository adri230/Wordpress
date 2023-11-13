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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
//define( 'AUTH_KEY',         'put your unique phrase here' );
//define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
//define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
//define( 'NONCE_KEY',        'put your unique phrase here' );
//define( 'AUTH_SALT',        'put your unique phrase here' );
//define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
//define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
//define( 'NONCE_SALT',       'put your unique phrase here' );
define('AUTH_KEY',         ';)>.zqY=hIr(/2:-CZ4{*)<Xs+k+HeZA*9 6[ZrBk#OMNa*+!h_#!WJnLIu2vVi(');
define('SECURE_AUTH_KEY',  'IUo(l&3?`sqU-~o<>98c3;V{Z`<FZ-K`U_:,2q2h!xMEq*/t[|>HSn/Su1Fi+IIR');
define('LOGGED_IN_KEY',    '-fy`&U0pqF`a4xb*8r{$(:Vk/1+!|>v+I71l*wn0fm;7M,2_W4@c>T;Hsb$4I5,F');
define('NONCE_KEY',        'CQOKsbfR[D(}eQTrY ~]3=fsGJ3-ZRh`hl}TS }3(JvBrj(.^ Ga-T**z^O~g3-6');
define('AUTH_SALT',        '>78VX1Pv+*j|Cpenl9V)-9,1RA4i=R j/3JKIQb6*I`--.E,+9e~~%K:_(?^f3K7');
define('SECURE_AUTH_SALT', '5jeFY&c!-O3xNl|<l;_hJ,hN,}&g8X,&j91M-mOG6Q*pQG6zaCjB;FsD-M-yzl%7');
define('LOGGED_IN_SALT',   '4-V w|<.UC((p,VW~SIF.G@PMeWO?{SbJa+ TC%gwJ].uO.]rXFB}W(&-)^/Yrw>');
define('NONCE_SALT',       'i7dZ)3D0n6?98n2EvGSX?Pg,sq #UlYX|~JZd*KJN)L<=dls^+|q|)::}5P_z-<A');

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

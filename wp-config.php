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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'm9(!Nuu-jMz6|2^rmG#]/E#TeVa}4e2fY*xO,,|:5o:=B=]x?q|<:ATd^X~hVA@T' );
define( 'SECURE_AUTH_KEY',   ']wU2yykQ1D0[$z;DyOh0oIz0|2PLs&WIltS<+22[XXyF5pntPO6y+w$+7nW&bb% ' );
define( 'LOGGED_IN_KEY',     'V]&nR.tgYos^R-l 05i!IMj`XV @i|{a]w6;.]i^mIQ!wNVDmnR[kV6b7#BJY4m<' );
define( 'NONCE_KEY',         '-LCP@yL_1z}#qA`.Q#y&aURrCsXA`u)m}7X]a:{DQ/HxR?;I#Q>F=l2XQf?4Ud[%' );
define( 'AUTH_SALT',         '?l;2oMwb-7(h8 jJN$#Vz7m9gcuxEm0yt_Q(f5Ej<[KYeq:XrPb2C<RHw$KJh]Xk' );
define( 'SECURE_AUTH_SALT',  '}AC=#FHXTL8$-|_kf@_i+u}Bntz$dhP@!=kgm_^(R%QyjG^cVoOjD4xSdNESC&r ' );
define( 'LOGGED_IN_SALT',    '#tGOP>v.1.~3%ie7hp,Lz6+e~C~/19)YJVzIC9J6A%4<UEjH:BHT{^@Hj;AbI:7t' );
define( 'NONCE_SALT',        '29HPZ[dY9xKL3?IUBuoeO.0:c[MIX5;>hVDvkFtd:5xD1kr46`@gs&N.I>6X2+&c' );
define( 'WP_CACHE_KEY_SALT', 'qa!OquTGnWJYMa+ ]zouTQ{_MSZl NsDzZK3-t0@(}oNin<Zq>qe2ow9Gw:2QmXo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

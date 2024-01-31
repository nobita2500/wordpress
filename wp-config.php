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
define( 'DB_NAME', 'xyz' );

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
define( 'AUTH_KEY',         'txmFVQIe?!HP4!#<b|=Jciv$O^71j8vKsn`H80&TR{^#-Qg)7}LY%>WqMm-A$xC.' );
define( 'SECURE_AUTH_KEY',  'YI%?#(!z}3iuI7*Bu9%3/~{h]#g =2~{cEJN5u.A]?R4EgH#d:YARpUrgmIz!BOS' );
define( 'LOGGED_IN_KEY',    'p*TyH,%`Dc[T5Y%]h+J()$UlDz$MBL.QW7gKsTz.!}>  {[CfM~7h_2fj1zqo+BY' );
define( 'NONCE_KEY',        'n%i|>P7rOq:#r0rgLsUW`X=bRwQl/ Pt{;ZokWDH+w>I>PVI_Z**WC7bncD/^V9I' );
define( 'AUTH_SALT',        'wqFxzqRbcq$k*)k<; zKqKL<mc}{9OYi&JjK~BQ{0}[n=sww,-d-&Q=H=(k*[KcM' );
define( 'SECURE_AUTH_SALT', '2e61m3(@ebi^JLR?VZcPCHNstfyEn~#xgZD^fg.c_.N~nyPEd6P=k/pZv%JO`m>R' );
define( 'LOGGED_IN_SALT',   'D@x0~#ODwA.V(atr{4r,pW27D0AvL%nrz)nfn`+SyrPsc_UDU}_XF0*A?B{r{F=g' );
define( 'NONCE_SALT',       '8f<g&YnTzSHF*|z{(xdu$9vYT#~0m!gb]pmv_Z<KM6]] Ebgqkhh|L=-lE_P,k&*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_xyz';

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

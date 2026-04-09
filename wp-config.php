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
define( 'DB_NAME', 'react-arda' );

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
define( 'AUTH_KEY',         '~A <~6:-ppEXN@9?ka4.4v=KU?z$Rq+~c/w;nfJ{61o:aAq&U%W+_qgwPfCB0{ W' );
define( 'SECURE_AUTH_KEY',  'oaly_dAT[]_IN&hugV1KEgy: nrQ>r!@[T|a D,CDDr%5yP5S@,v`)VS<1lh!2v]' );
define( 'LOGGED_IN_KEY',    'e9hw_3pJh}?6g4oP)O2xS7x}28Twi.dko*L!?=}sH0t2aE]*tR1?iYUaju;f#%Yy' );
define( 'NONCE_KEY',        'J:AnagTRoLhUuojuR97sL8doHy79;(2(m2b7RHFAAxz5xab N1.Y],o|+wR51aws' );
define( 'AUTH_SALT',        'zI^2F6p%jU?n}QIL*aDYT}*){XK:F=~CcXF1n{o7wHn% bU-J.nLz)Xw]**%K6<l' );
define( 'SECURE_AUTH_SALT', 'e-8I6)RiTn1smdP!CSQx-S()ti3#Sm.LY{xnc!hZ<3xI-&)rC;#)^9_#u`la_vfo' );
define( 'LOGGED_IN_SALT',   'F3rB!9?(mxP>wt}H/05hde[3m}e.W%[> h)$ %aR-G%-8=7ibS:,kNSk}k1`}H?2' );
define( 'NONCE_SALT',       'WSZt;ZP-6[eQ9=QI8>bG1,<o}L&~V?N-8+sk{{4LEp}>Ot_!(RdY-_2D.YkVcfIx' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

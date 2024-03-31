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
define( 'DB_NAME', 'sastojerseystore' );

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
define( 'AUTH_KEY',         '!/SU_P?!3fA-]~G,*;CBM63kGkZt&CC{T%{XNUqTc1%oJmP%W)!S=P%yu|.*g5)/' );
define( 'SECURE_AUTH_KEY',  '%]M_%#/ptlNs4liproSFTCgX9N7}/hhR4itzO?t3vEDk2dEAi-(+ZV7JYw{5Cj->' );
define( 'LOGGED_IN_KEY',    '?3,nMIc{`iRK6y$/xL]5k77 =gcatD:Y2tdo3#!GK nGS3!5$#!&|<qH$ig.tI]L' );
define( 'NONCE_KEY',        'YR9IJc#B=?:k~%y15>d>Hm$;XTj>LLSj%47:-eR>`LC>u|!:kb`}.+$qMn,]<C^[' );
define( 'AUTH_SALT',        'M$*1xr,=Oy eEb1U<b1oxQ;Qn@iK.0%KPh<m^;#cR:Q&`YQoyD*5`v=>2+0twN=o' );
define( 'SECURE_AUTH_SALT', 'k!F$mm7t TIj#]D5T+K<,%%VkgdmM]3KF{ G)JO7V.WB%|[xL-bW=cZw%#RK42o<' );
define( 'LOGGED_IN_SALT',   'VS#NByt*S*x|iTfz.a^Ncs)Cq!ixPp,AUGf}bWH.eOKU[-V^6:mupeh~90=b${3E' );
define( 'NONCE_SALT',       'ew!Z)HRcNH~8RLRyp#>`FLn{[SbS$oVanXoRBJ7EIVQ>JPiRFa/tW)a(*cFka-BH' );

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

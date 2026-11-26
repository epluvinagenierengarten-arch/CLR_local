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
define( 'AUTH_KEY',          'M}4bi:h0fI(x#>6<BT-t3pX`e^Cwp4};S4Yel:)qv$2g#pQwsQwp){6_SC,Y5`,G' );
define( 'SECURE_AUTH_KEY',   'C<BO!SU2LNwtxRCChdX*`>`PdrXl5+}IJhC84?jQIpnQoks#UhWRC>0[N7YQ$zR&' );
define( 'LOGGED_IN_KEY',     '5#*1^_9.B9lcJ|)Lr_OpAo@M48,.woLE8][U2pU(JW|Ldwqrr8%*~|yA$B)AJ#v)' );
define( 'NONCE_KEY',         'rW0FBj<|41s ^-I)x$|[ Ab|;:])6dejScY_RYcfF6|(uGfn[E%Qi3A(4^uNi.Md' );
define( 'AUTH_SALT',         '/5pYnPCK]0$&Q$/*<fm{GB]cts>s}*X1+0<(cg}hs;w(G:pMiS%~P~);9ZL~wM{/' );
define( 'SECURE_AUTH_SALT',  'f/</jWQ=ueDnp.2ZF:!>ubV_RXo*7(_`Sj`=uJFSb|j-DOgmi~J5a}mtGSnVBaq=' );
define( 'LOGGED_IN_SALT',    '<Do+UA)<)Sv05hNr@*/*VE[sH-w>}P9%Os9$@SuN:=lE=$O/{G8o%2-;/lhO:bjx' );
define( 'NONCE_SALT',        '=38W-}hx6$a!_CR/apEmt9mH- ?B9aw_;(OEi} p{S]yBhZStD8u@kjp{zvj@yQ}' );
define( 'WP_CACHE_KEY_SALT', 't8)#KfhYFKfh,ak6eSu0>9Dk+fWz>ZuckEnxZ@D*H1^XcFbFm0|f+EW#o8E,7G!/' );


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

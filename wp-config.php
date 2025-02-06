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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '4m4q ^|mXsyrpT9#SVBL1|ZN=6!{_t;*]UTr< gR1M]4eMR=wn6*/%7BPX?rl@~b' );
define( 'SECURE_AUTH_KEY',  '>}bJFSAU!Vqw:P;DwC,?3C4<Nw2Q`0+ro#!hFQiDPO1m}m:MqPYY+L%PkQ_;<;&z' );
define( 'LOGGED_IN_KEY',    'bFgfd>c@4@iCq#ypjjksK9hsVw/TQdrR<p}sQh|UE fb.6BQ/CP}0$O8W0^mm]d=' );
define( 'NONCE_KEY',        '/KO6Y.CnYx~>sCAV(+=yV?fjpnV}=/,}n)n4eUl:p%%Qmr{zMG+oR0V_H/.Qp^l4' );
define( 'AUTH_SALT',        'z5#v<;j0yc]?N9ldPPQ9j^rku5fLk_@o^F~%6)9VOD nTWQ8,g/jq%gNPz^P1Oyw' );
define( 'SECURE_AUTH_SALT', 'Ess@|7r:cIBOVrR. ?y|$HRCag-C)_Zgj+:z;{LO1J4k&2gDeHMzr0$2[/*m<2V+' );
define( 'LOGGED_IN_SALT',   'Bz3fDkrIp-Pt?zTCXE)o--@5KvSZs_rr0TfPjAKw,`753%K.b_ZI2.V07d)bNfg`' );
define( 'NONCE_SALT',       'T8?Dgz3F(v&3TH8`]_-S)ovaxU<]]8ajZ1F=/&nC0CrpX.nfPIU~D5Z1:vV#).+-' );

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

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
define( 'DB_NAME', 'shedrub.org' );

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
define( 'AUTH_KEY',         ';}#O,hL;O;66L#Eu@=y;1wZ,{GtIM @#za.Z0_KK}p*9Z5w$pU.V|Jr[>CO+Bv{ ' );
define( 'SECURE_AUTH_KEY',  '3`.BP2LJAq4pteZ11ug4fM70Myj8`)ks{]9M#?:G++i%#n$.KVi1}S<dRB,15RMC' );
define( 'LOGGED_IN_KEY',    'c$W6>&cwASe!I8:r]ry}*7(,p3YvDk}p}<xZL]!a~iaod/8zxioL /{p$1.c;!b-' );
define( 'NONCE_KEY',        'UxL]rW%J9SvN2YoV8Azqb$D>3EkA1k%5FE1%R<;?FHkH@E>7MoB$6Dh~ss}jw+b ' );
define( 'AUTH_SALT',        'L&!`n7]1x2k7v8clt6fnZTl+8|T!vTEg1vqu%`{ &j)dSyh};foytMm 6zU_!aH2' );
define( 'SECURE_AUTH_SALT', '/<4b!i.OWk$-8-p8cT *6yDdbY4ctL+AOM2TaEU!/2,DuIOy!;!E$&RwDx;_(5<2' );
define( 'LOGGED_IN_SALT',   '[nQbnv2_mFz,?yZX*J_X?&T_*$NoxN@@e0`qD*aOP~c`NPGa.B,BOUbB12Mi)Z|r' );
define( 'NONCE_SALT',       'aV@nlR&&Zn<JPr%^WaC?j`elLd>8PLyj,76_p98-wE:(eRs6LRIcsV ]@0P/%cB$' );

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

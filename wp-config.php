<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'aimtzqij_la-food' );

/** MySQL database username */
define( 'DB_USER', 'aimtzqij_edxchange' );

/** MySQL database password */
define( 'DB_PASSWORD', '8QiX2;8S,eYW' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'krh/4ju:RM(?X^Z#&PICE.y45nFJ73A$0Ao><C{vAM?NRa{I8]v+,:L{3Goi7^jR' );
define( 'SECURE_AUTH_KEY',  'Grq9L_Xr:hROaW7-xht|+ $Za:P:$uwLIrmxgj!hQ>$aFvtk0CFLuLNiGYEt;A{:' );
define( 'LOGGED_IN_KEY',    ':|x_aHZ7FDSSW%%POL~:?67^mfvWJ%eN}s>.=(!7)9]C<`#zkkX,.juDhZMboy_P' );
define( 'NONCE_KEY',        'KJOlsEVZc>RP?.^y.`WLCQcI,gUR.;3^7<N?f7f{qf6=or2E[CLketAqb4jHA,Zl' );
define( 'AUTH_SALT',        'f1Mn+Ksy<]&j[%TH3ihWnYs4P%~T_zj^)$!=mV]Wy{H#8!prg*3TIa9$7z:*|eN%' );
define( 'SECURE_AUTH_SALT', '4Gv}|Ge#*jUji$nWNE~t*5@x!BtNcj=b66O~;K8Cvm;lOWM]`TTJ+l/N<x5[1N_F' );
define( 'LOGGED_IN_SALT',   'Fay5zF1w)0EL*iX(z|a)zuO_9rX*+JG/s|rg84f@xmIBP#<1K5Pzoe/@tAS{Ra+5' );
define( 'NONCE_SALT',       'Vz/Y-.P^Y|%OO}xxB]~C ZcDU$ L8&^,x)u:XSXGI6#Gopm7j?mi0%Vs~en_[8^M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'nicepick' );

/** MySQL database username */
define( 'DB_USER', 'nicepick' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'qY[|v-U4_+(w6C2Z%)>y-K<j&+T}5E^$d4/,YApan(^RZc(r!f$pBra|h#Nvq:%;' );
define( 'SECURE_AUTH_KEY',  '-!),OztiDIC^d^YalS|4;f!,_^=.ZQTd<3<-W7Bw~NF1m%Jxjf@+4u{Yleg__gU[' );
define( 'LOGGED_IN_KEY',    'MTlow4qhHGqM^>JEVI!t5Ag}pJ`,G4#Mmcs@Mu-Rm7eCv]IvJ]x;xen|^;: 7POj' );
define( 'NONCE_KEY',        ']2;GRfB;zBOvMlW|8|BqB7q3 QA2}CF;o/?&@F@-ig=EbR*iPU9]@4V3<cVczXts' );
define( 'AUTH_SALT',        'i3`~(!tb*KfpY/krkXcoKH*)IH:Hpx;xP!uHxL.ZrYn#k,~P9MHmx=@+[nIl|Jg_' );
define( 'SECURE_AUTH_SALT', 'H`ym#/RSmq#T=]f0T0qckO7T #M*EMzQ Gdg&KGW+mv/%zo<QkUX};>m`d-|^Fx9' );
define( 'LOGGED_IN_SALT',   '$02tpsw69 NW$1c8cso[V~fiaRWcTUieXtZFL9qEH*M|_m9~W79)F+l1sq7ujPE~' );
define( 'NONCE_SALT',       'Huf2gfI{|h#H#&y/%^-i3U:eKDtW1>%^TVA3fsH_y9zA15&M`uo;:Nfxm V|(vJ=' );

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

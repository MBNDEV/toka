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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define( 'DB_NAME', 'tokacbddevmybizn_site' );
define( 'DB_NAME', 'tokacbd' );

/** MySQL database username */
// define( 'DB_USER', 'tokacbddevmybizn_mbn' );
define( 'DB_USER', 'root' );

/** MySQL database password */
// define( 'DB_PASSWORD', '.2Exo~8ch.z.' );
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
// define( 'DB_HOST', '148.251.34.250' );
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
define( 'AUTH_KEY',         ';I}6MlE9Z{DbQ%J/QGJ~aw!r_EvyNv#Lw-9?d_u~c%{*s}PQ~;k}BvVNc$9$Hh%?' );
define( 'SECURE_AUTH_KEY',  'fC#$ESYBU_Az7`sX-x9+xN30w{N5&L7oljhl7+xj]:ijHl6JB7j8Tt/-m_6eUb-8' );
define( 'LOGGED_IN_KEY',    'v?TCVT2, vr6zc`F,BmiaS/[ptDXy+&$Qfnw$Di:LJT/>+=F4g(Ppq^{|I>f8zvv' );
define( 'NONCE_KEY',        '2^Z)[Gp$;ih`a`>^b4;WuJW?fevg5[6R/C_*S~E[Gg@de;(8LaGJm^w|t:znk_bC' );
define( 'AUTH_SALT',        'R; KOr>2W#O4;Zz`]7u/epP4=K_G%@p.UTkV}Wskzg5+}CVN+I-=[Pq`HhLeoMaA' );
define( 'SECURE_AUTH_SALT', '*.4lN%ITyU:ScJ7PR}VLVIbj6t($C9[&+r*bHzuA?Bb|0hABw.1vS>CUL+x%9wW~' );
define( 'LOGGED_IN_SALT',   'AS1X!;jJIOen?PalxK`EqT-VQ-/=0i<gUfrThMK~!9^#Jd]E@Z&89`O~]-%BB!W8' );
define( 'NONCE_SALT',       'C*(y<Ovtt#xJQ$yNdiKi,s[rP_eC@<vR)Z[@D@0P?^rS5>={4Bpte_3S_.RKDXkN' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

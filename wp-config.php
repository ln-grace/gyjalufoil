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
define( 'DB_NAME', 'www_gyjalufoil_c' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** cached. */
define('WP_CACHE_KEY_SALT', 'gyjalufoil');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E[HO|V,(rU3n,DR~Pc&a4y`J{|25qb}[-w)og{?S I9x9LiI-a5AfKGUF?vy%KVx' );
define( 'SECURE_AUTH_KEY',  'w(}18*%p8M]db))9A^-~J7E;!p@25ELWR]a+9<Sec6/|c&`GOa[:9{Ad2vieLZ}R' );
define( 'LOGGED_IN_KEY',    '<qDqI<rG>j+gJ:L|/D+okJ.XGk{#g0aa<3w3i-fC_]zgfbDa$1D`)=Z_9Z<Y/apZ' );
define( 'NONCE_KEY',        '4o~8kA$eV}g.m81dTuaP<-6^LBb%YXu73y w|bq!=?D~R VBV._~<a)AGc[+x{Ro' );
define( 'AUTH_SALT',        '/Zn{Zm9I)wC0E]d3i9gBxiww<DH[ s=T{G5c:S|_d|:DM- jYS%m?@,Pm$8#aKD8' );
define( 'SECURE_AUTH_SALT', ')lNK=5J<UJL%pYXj]A%kH stzwXHBtm:.gCfkR)3mvVp*ps<AskkPtF*,~f|df[%' );
define( 'LOGGED_IN_SALT',   ':ouqN*?rzk]y%[CJL- 44.StCknD:<CmrXh8t}}NK@r9:k?W{B#rytr(v^?JWM~2' );
define( 'NONCE_SALT',       'z+BF3K: WzY^(-I,ea^ZS~sxHjMT;h~VJiB<5X$};La! /Db&4P1h|~*Hv$}>v)B' );

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

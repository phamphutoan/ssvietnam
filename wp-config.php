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
define( 'DB_NAME', 'ssvietnam' );

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
define( 'AUTH_KEY',         '3f]7&ujR%:aTI$@IM$7Q<SpGoiov69s-W%0=MlW4QxN;Nd,<-p%g!zdgMh9L[ka*' );
define( 'SECURE_AUTH_KEY',  'fy?DEs,jgT7N?%t$-1^Ng6E[AL&(=S|)^zVQY9M4^oj)QqVXI!*G;#(`1Df~-d%o' );
define( 'LOGGED_IN_KEY',    'i{##<s2Ol39C Yj2r-EDOEyCk^itXf4m_A. q]?CTwbPTGjR=_F~O!p?f5Y*Kq5M' );
define( 'NONCE_KEY',        '3/2PaA2o:|(j-,{z>xShu7f)m(MapM$ Um6nIitv:3Zs7^#(Q*O3vLOMLT;?JVFv' );
define( 'AUTH_SALT',        '/mGEr:@jbqpSWJcxkXC>7,^LD>iP$Tqa^|[m)4S,78~**_!F,.l:K=~WC8`ez$%e' );
define( 'SECURE_AUTH_SALT', 'Rv#*8lx?LX{=mexBRW,sd}^`<<SihKK+pTAs}#s$-yzF[PG$eKvVQ)/<^)Rx5CYs' );
define( 'LOGGED_IN_SALT',   ',iRU;W.zihhBu&PyAkBb~|!VmtAJR9FA14hGcgL &i{$%KL&1 KVz,QOU>D! dq&' );
define( 'NONCE_SALT',       'zHVSH.Z4n&) uCyz$./Dd@bH>n,MQ|;O.Z<]?P2FB!{^K~oCP;I8Z4SS,7`Je&8w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ssvietnam_';

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

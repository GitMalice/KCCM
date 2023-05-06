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
define( 'DB_NAME', 'tlwc2962_wordpress_kccm' );

/** Database username */
define( 'DB_USER', 'tlwc2962_wordpress_kccm' );

/** Database password */
define( 'DB_PASSWORD', 'R@OT$x!]5ejF' );

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
define( 'AUTH_KEY',         '^#L8:,#ljdwS}-J,&o.Euf(/lzUB| ;b][`k0^IWQ[i4xVzF[lv&B5q(fQ(rM[9b' );
define( 'SECURE_AUTH_KEY',  'i~d&=6<@tU$|2,Mi6;9-/AkL4P6fIg[HApvh[C6h=dVJ{Z<Z4EF?C&Lgz[bX8_)/' );
define( 'LOGGED_IN_KEY',    '?X)}Dx0)PK+H9{^*r ~n,#3):(p0nC!>xz`-dh(NPjRku_=2v_QzUMt:rb-6OoOQ' );
define( 'NONCE_KEY',        'vm1lR=2^:}D8/F~U2 b5ds>q$+/J0 O$ Y>H5TUN$8cf>@.wU$+!zskm./Xi?[*~' );
define( 'AUTH_SALT',        'f!v-t.drhudt{%fi`^?XZLooKzagEM[?cTd<%9nQ6zRgofe&J.kJ^k972Fp@C2rv' );
define( 'SECURE_AUTH_SALT', 'xA%P|bY7hMM#Bx(pb?-PsQ)8>0Hs#Vz|0QHU0VwAAU`8HTq1y2 QK>k#jw$C|:S(' );
define( 'LOGGED_IN_SALT',   'H6$[?I#H>QP~%nw%!_Gu*R,bLeFU2F6{j~zxx$!}(<a<!FVBa`M($A(+t-{Bh*Ff' );
define( 'NONCE_SALT',       'e|4K%i|f} z|(Q`GxK*;f|=mqV Q0l7aw-^ YuFs8 a(%~E]px6b7A-th+zvfP73' );

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

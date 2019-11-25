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
define( 'DB_NAME', 'asta_web_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aa123123' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.1.7:3308' );

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
define( 'AUTH_KEY',         'rAzzepUKa2m>&Y~+E_Ft{P2Gl_+[<L((V=U9zwh#WNss8m+G=g8`6#uzHZ3Co*e+' );
define( 'SECURE_AUTH_KEY',  '/},BqS.oh#LhGgI,`,5l0|u*C8/JXWa;m=Cb=mVK*YS. %2qto77~B#qDHF@^3b`' );
define( 'LOGGED_IN_KEY',    '1*T~P;e)CI?&z%lV``CNR^|u&!)*W2JA#U%,@ 8h26(V3W$gh?g:3i79kOOO%HoT' );
define( 'NONCE_KEY',        '_~49p/_6J~k#QiZQf>|Sd>}XN~bhNOY9] }DE{Y_VX3MbGV&c3=7QgK<s4Sx&7qk' );
define( 'AUTH_SALT',        '}K3)^*0DVOizPlG+O#)+<O/443&0d=n6.0RS]OOx*7eW)Aezxf5!sK,eC*Wd@}li' );
define( 'SECURE_AUTH_SALT', ',5TIXNK?dcHK^YE)1KaxS7<V:@LBa9 _iy^{KR*z?o7abr(.&5Fv[vqE8y8l~%]V' );
define( 'LOGGED_IN_SALT',   's7kbtQ9b#>kB1r1VT5m4UD@{DR*ME5}ZnwCQ]i*P,c~6HJ1!vs.]%WVz+Tz3CKOP' );
define( 'NONCE_SALT',       'r87lPd KLTGB[UB?M:Ex/kc6<eh`,})6kbEFfz7PJ!o(L-o(xME#*~4V`[UjV6&?' );

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

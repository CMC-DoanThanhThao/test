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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp' );

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
define( 'AUTH_KEY',         'LD/=k |hdRwf2/yh<Z~W}[KG,5xYR|%;x7cYhl>6JIRLzw[8@=I$QpJ-[FeH rw~' );
define( 'SECURE_AUTH_KEY',  '9U@h6;bNJx*@4#^^k2)TkwQPPua3ZgEk*uYE7>G_wjKWGw,xC[;II[@!s{4R-/WX' );
define( 'LOGGED_IN_KEY',    'U4BscG5l/uo(C2/{Zo#[I:(X[>ZIoY&XKNW=rca: {/?&(#*t:{kUoVb4/K|O`<T' );
define( 'NONCE_KEY',        '1Xpp-Be.@y;m=-:rBg$R}7V+z;C,xRt;d`{V7<?]C)XxaMAZGR=Bj|yvYLnJdCp{' );
define( 'AUTH_SALT',        '2lo-O8CH;no895X(<MbHNA(A#DLN}$?5h1%uB8=_|.EWm%8Lh6N#X(])q.Pe^D]}' );
define( 'SECURE_AUTH_SALT', '>~E9q{4szk8;H>*U_;nz}eD Eq$GGXqL~ztV*KzeH;:`Y`0ZvpnADz`0?v@3`%l5' );
define( 'LOGGED_IN_SALT',   '?FmTBVARD^q=Qf1|?j,4m#?ATf4:UEu_U-c)mqzMl!yI*4kNAvR+#>e[v.1)DOv5' );
define( 'NONCE_SALT',       '[)UJ^rFRg7@^IBw~[~sDLCnUApLYz_>SrA63gy0MV][C%0d48:SS[J&:Ejq]wI=p' );

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

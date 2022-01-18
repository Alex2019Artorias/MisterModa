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
define( 'DB_NAME', 'mistermoda' );

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
define( 'AUTH_KEY',         'H_CWYs#xhT8d0?~q|+,pbF^?ODQ3e=<#1cJoD6*YSZetM19o(v|?kWa fHgu|1f@' );
define( 'SECURE_AUTH_KEY',  'LlUZ-#Wr=SSsd&vREp74*[yK5r=d@k3D<(D>!sUVJDWfM;1>_N4+{v ozJ2Fi,dc' );
define( 'LOGGED_IN_KEY',    'o(@4fx{f?O:@lq?w_5r5{>fpq(t6f e|&/,n9WUa7`JWmW>tU!6HGybd;LfwU] v' );
define( 'NONCE_KEY',        'R+BDD,Hx,~S[s*J#{AGaiWj0eD|_?yIteuM5iJwp^Ol X,xH@_u33H=tF[P|k-L|' );
define( 'AUTH_SALT',        'D&h[r2@bc9KOpozPAm{h_YO@j5&m3udvPA8ywn*/cTo.[;j|ikV><2>Li8dg4?(a' );
define( 'SECURE_AUTH_SALT', '#=*G+{8vh}I<S|Wy=[S^IHboPq}Jq&KZ:&&2+uu!<_|;m!Of5^8Ms}[xVLQ2.Ajf' );
define( 'LOGGED_IN_SALT',   '/XrObc6qE]I$~M#6g59Y[T` k/>NNA?AB*VWQ=A#=h]m_xT~/Pn*40Y&[Yr W*n[' );
define( 'NONCE_SALT',       '{au.K|/oLu}Knw?#XaKJnz/T)LPLf4GcGg_aacze-=$:^SIF{>!6NG1wZB:37S5Y' );

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

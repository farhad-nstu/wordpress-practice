<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1501033M' );

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
define( 'AUTH_KEY',         ',aY%HN#:%OH(bW~>@^S_cj63`v9C>kp]rx[}pe `n.$G8Q@+)y^vTrj]b({V)RgQ' );
define( 'SECURE_AUTH_KEY',  'a*g}a236CoKqq6J$(l8F4xMJD;r&lm=m 4S,QNm3-6X;Qz-c5G1MV=6g1=(MkyMs' );
define( 'LOGGED_IN_KEY',    'zS[N`9bH<inuVv}pe3?>3BP0O-3XWHx_kk)B`fC4N{]tctYf!IQRqpO-8zL%j)NP' );
define( 'NONCE_KEY',        '::R./jQcCv?;gr9eIAm.]WC+{C^Qxmc#<m]cc2k<<-!*QHx>~zn;8,M,.FT&RTl`' );
define( 'AUTH_SALT',        'G!][P0f%saY!F~+%Q|oo~p=M~Ri?qv8vxR.tdeB/Cw(uu/&Uo{a!wg5aht%O)KG#' );
define( 'SECURE_AUTH_SALT', 'C8Xu690E#YcV>b~F;r|S:E~3o}#cd8_3hS! [vr8rqf6$&rX/IEF!4,jv9W|FXD`' );
define( 'LOGGED_IN_SALT',   'SR~w$5^S2TG4;8}k~b^??y0z[nS]NHVab~m Anv1|HwriURdD+3=Xn0ry~`];h19' );
define( 'NONCE_SALT',       '4f cA)g4)/f=>8hfi,`LKBx{o7HRnAXDs^i52H23ky7@<Q0XFU Xzvqv<#|Ap}oW' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

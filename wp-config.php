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
define( 'DB_NAME', 'zelecia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'BZx-E^RTHO}>e,/9Go0.]eb;`HnoX<<R+^8;lqZ4Z_vc;uS~hr>HOW.*Z7[q].V/' );
define( 'SECURE_AUTH_KEY',  'P0oEf`mLNewz]P.eAnHUO>|(Uj]q|EXEEDkxiyT918Hy3pMqWOe#D&5gbpK%_B(G' );
define( 'LOGGED_IN_KEY',    '{Y!g<Y{a0WEwhPoS[ee@(Ep6, -_(u:}m<<?W!yPh19*#f,Cf,AX(}r[Ry;kf%Mi' );
define( 'NONCE_KEY',        'WUikh!K# c-~ZMP[C%FgcgRUF.Q&X8pg,~[GVf+}%O#Lw]nMWRUmff9mRRm)Y9Fs' );
define( 'AUTH_SALT',        ' ?I%E+I4BR(l&HXomFcIgb]sV1T9?T;2l6E}S0?eN:8l,&.)+W2Ms<F/|NHINht/' );
define( 'SECURE_AUTH_SALT', 'G9hW5Lr`i~v,r7L}KxA}NQEq/{hKs%9%Jtwm8f6(2G+D%!g9gRkr&x+E`7b0?(u(' );
define( 'LOGGED_IN_SALT',   'cFB6c;t&qDN$*8ti*Yh=fd=!_/*-HHT>uy=@uD)U!s559edh2 |DsWa8m{FBK$<F' );
define( 'NONCE_SALT',       'b,T.<o(ey}y+MbWwD}gg wH2{l2l!VLh]7<W8GUV0P[-t5_~|z?1z/>Q2?1!alR~' );

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

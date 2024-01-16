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
define( 'DB_NAME', 'flashpointdb' );

/** Database username */
define( 'DB_USER', 'flashpointAdmin' );

/** Database password */
define( 'DB_PASSWORD', '+Flashpoint_24-' );

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
define( 'AUTH_KEY',         'k]SM$s9$:Z-H5/:{dNFLaT$a_ Xr|iU>bVRjSzdS0)GOC{j`E`AnWFA6UcQy@{~U' );
define( 'SECURE_AUTH_KEY',  '&ZhB5$Q@&ksV@A5/ac`:@- r!LbhWYgW}(FGf,z;+]e>>no<Y}s[yy@[(<diHJ{1' );
define( 'LOGGED_IN_KEY',    'nyv#t<-3$2t`U>A./?b6UbQW}S.!:0@cxkE1ST@(q46N*[+.kcCb,-B|&Tz!3,cs' );
define( 'NONCE_KEY',        'M7>3sU^wxCH&W&K{DSRrm<d)mI/p1Vwd]ieWNFF!UzNr9DXv KTHm=$f<npVmFN{' );
define( 'AUTH_SALT',        '$.Vy@8^0?&<U!/m7jvX<1[BM07~~=& :zJE8EYGq?8EG><;!_y.V#}5]MrlsEAR`' );
define( 'SECURE_AUTH_SALT', '1fHQe$x<NtbsE`l*Vp`SAshJYwtDDIw8o3S;SGW|l,Vl)G_jI6[gw]_]<;85*eqJ' );
define( 'LOGGED_IN_SALT',   'e?6O`q@zN1vM8T_qhq~tL)B~YZ3DWlR~z+RH-FdCg(}7$XmBA%Yn [NeTQj@td1k' );
define( 'NONCE_SALT',       '0i7&C+tK4#4lGq,F6J?xQqS#C>`#O(tg#O&ik(*G5LXK;G%,wZrD:txGw1W&3^*R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'flash_';

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

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
define( 'DB_NAME', 'wp-nav' );

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
define( 'AUTH_KEY',         'h/(L^^MhXw:6ioj)[RU_153([~E4`80i=BM8NH,R>F60IL2xsIe%g L>q2Ez?oGI' );
define( 'SECURE_AUTH_KEY',  'YlR0^O,WrU=eO.r@  1l).VG1x<xG5W7wH)bxs0p}$fy:64*TYSL`]pD65o5>Pm-' );
define( 'LOGGED_IN_KEY',    '@mR.*Mo3W{$4f6(DoPjdqZauSV+)eGxe-;(#GOUnEnb&x<rv&k&UqkHbJ-XRtM;b' );
define( 'NONCE_KEY',        '[EuZ97JR@r*d=$mFU30t$Wf5_s-ZRP{_iO{C)X7<4tE-6XU542#AA*`3+{s]zyeL' );
define( 'AUTH_SALT',        '~rH&$_AIZuNI}%ciZ{P$|5wls8cI<|&#glnP3#ch)U3t~Nh`O@P>a=mt)JSuV>jB' );
define( 'SECURE_AUTH_SALT', 'm5/rk!9S!D3`Ehs*,w/.szQ2^Nq^)*?t/ksQVU>kBOu$.$PT^/z/Woxb+9..NuI ' );
define( 'LOGGED_IN_SALT',   'mnYOB]RazOf_(GRf+fM(/D<7JcSO].iz--}N%?wo(B08B![Bj{mfG!Fyrv@lo+op' );
define( 'NONCE_SALT',       '=-B*oq4C@f3uJ;/U&r^aadm^*=F)^`v9n}Mk5EHNH%<bX<P?qUB3neP~w;@ b]BF' );

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

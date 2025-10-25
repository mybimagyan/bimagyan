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
define( 'DB_NAME', 'bimagyan_db' );

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
define( 'AUTH_KEY',         '}ubO|J?*+i~GqT:Wfp7}v]%(6Ksq;Jhda<n3SyA98l[QU~ko2TT>IdI0P]e)sJ=s' );
define( 'SECURE_AUTH_KEY',  'sMpaM,hgQu77T,7WVwa1Q*^}(AQNI9PFUa-a-U$2 Bfm*RXU:QWUynYt7vVkPYB4' );
define( 'LOGGED_IN_KEY',    'KX+XtYbSbr5/I3g,P2>HzED0}~ewP9GP)*hXR&g`#f|(_7,UnAU+0>[2nge6]g%K' );
define( 'NONCE_KEY',        '5dG[K(W$7v s%rpEZ& v]%KCn0gEGtT@h4fO[WKVXrf?*vK^Fq`[j.,F?GKHVeGB' );
define( 'AUTH_SALT',        'Tse;NJ}7}%]cQ~{v7x39^QlIOtDImP,nocWA}RaB{Xmxk:HXmQls.wqKyI6Ap0S[' );
define( 'SECURE_AUTH_SALT', 'sS%]1CuYMPAl+-~xfIc;G`F-{sk*HB|_8gpvl}Jg,paL8{Uy)Q%z>5Hl03$(#3vT' );
define( 'LOGGED_IN_SALT',   '/}[@37kF/J5{QNS$jqqV/2j0Q9<{VR4z`Vskumx;n|1U5vMpn >6VEz~abEcz239' );
define( 'NONCE_SALT',       'oRt-@&-mj3=}xg^m,E+1g1rf ?cs=o3,z|RbbcmF0Lb79U(bFF_5zT[b7BK[ZR1-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

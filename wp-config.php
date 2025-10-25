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
define( 'AUTH_KEY',         '7H6ea6]r@x<X7Ye%$L`{sV;7@Ssh(M03*OgblN+CpHv;!vwM+(1UrGXyh$Q82qXL' );
define( 'SECURE_AUTH_KEY',  'I`0vqehC|yg&&?)*84W#m]XS4?dZAZ!X^<leFki|hUlObV!)iK8),Lt2t;UcbM-Q' );
define( 'LOGGED_IN_KEY',    '463?^XR-j&q~icCIl7ZUPo]mFn?_Ivpb!5+,mod/Hkr057+t*%c&.&ek9><d2,kQ' );
define( 'NONCE_KEY',        ',^+:]4?Vzf{>:{gvir5=r3Ut_I!sbX-Rv}0ZeA|.dBJw2f}?+`-*>w3vy|H^X(hD' );
define( 'AUTH_SALT',        'goANj<_`,66VCrS7fD31zjzQ ub$d+vb7pO[z|LS7}ziijo51rKMn*m!DU[:i;6m' );
define( 'SECURE_AUTH_SALT', 'F4Y|!}bO8wa~,{vlLt3;6(G6%)@!y#?5%Yq)7Sh,!6>xisyfhQ_@U!>lHf7|)>%Y' );
define( 'LOGGED_IN_SALT',   '>SeG]G:a2ys^#_[z<%(n4bBK255(*L6wDowsTP.*(xj}hX;Wc/r~7Z;YTW7$Pm^|' );
define( 'NONCE_SALT',       'V<O`u.:6=`HHbJ,dYh]a)K XB<4j>b[.=|w^DQd HCbClucJwG}1KxZiSQJn;?rG' );

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
define('FS_METHOD','direct');
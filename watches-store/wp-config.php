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
define( 'DB_NAME', 'watches-db' );

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
define( 'AUTH_KEY',         'vTd7:PwR+!eCQ/o%-11?l- Rkf1WK0AE8=T?w|]ur:Q`zNRV #|,Xsy%,@^ _={n' );
define( 'SECURE_AUTH_KEY',  '(3c69,WOhkx{ZYH<DlQF6gHD#]:cy>MJ##aa:NA y`:pP6M27$$]fK6 2@{3eei]' );
define( 'LOGGED_IN_KEY',    'VmM`tBDj/B}yH&eC14fG]T+aN9}Oi6&/^V+8UnU-gP 9B/fd{CwaEY :p58G}=z/' );
define( 'NONCE_KEY',        '`xc`L`RyCRGzxb0t~7RUHN7m5gY$Y8yuG <1+=KET<Z>O!1rY:!o+f>L[s(cL:n2' );
define( 'AUTH_SALT',        '<UbM;/{B813V,Lk>|T1idsh^}QB)I(H`Z:]>p$Qn_qU^0W6kOk&@o8b#~P&fg~Qt' );
define( 'SECURE_AUTH_SALT', '2RHT0DVq@1R{^p2#|?JGBI0,)Yt-#5={;,X{dln>fIV1`q+F|3uW2u:# iD}>x/P' );
define( 'LOGGED_IN_SALT',   'kTPg~Vh]R#eE%/)d}x;=I|-%UKpWR>a!;nY `_q&JsqI Zr_uh]]Jrwj=NU`xKqW' );
define( 'NONCE_SALT',       'Pc>vUDQ)+_m?+1Sm]z^*Z7@CGF-#8?-+*Kz3v>6j!y-b@~|Fx},_v=6ntF}:/$?F' );

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

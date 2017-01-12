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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/vagrant/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f2h6Dt>I5J!n-pJAJSS!NtEBv$cB&cK8?JY$6P_vt5q)t-68@xK%ZiLO<+>IE#[`');
define('SECURE_AUTH_KEY',  'Y1qP > 4epqbo2#sk4WX+Rb#TW)/=RIuxgbyc~s #SuH8-C{YR*%/A>`Khf;(BBw');
define('LOGGED_IN_KEY',    'IWh;@_|rPik#(`wj<M+.dn>aJ0E&jB3nYm<l>b%CwRXrOm,>eJZ-j[S;H0.nb[D)');
define('NONCE_KEY',        'm^6yQVE)tOdAd+!2tjQ5x[KK!5T4r$E4uIAX,dNn$H}|{rRYI[c9~$=6lb/P/oss');
define('AUTH_SALT',        '>JcrPG>w;?@p{U3Ei,%!?g9<=$UgU`K*lzb<iuND9R N]0%4>8[bHG,;8s6Wtixx');
define('SECURE_AUTH_SALT', 'I&ys$5a[a>4CvwiAa [3&pXTtC!:$T0je{h^o,Ic3VBN9n.5*Z!4uW+KHe(dZ_HF');
define('LOGGED_IN_SALT',   '(y^KW!H)n.~5e@`LGA77~9VXjUqGa6c^,L1wYbT%[*GnYC*uAF2Tr1+|2-`:0y<L');
define('NONCE_SALT',       'tYnE&0j8&Ad2nj/xus}M)L<fOwC_uqt&rmhF(fo-C^C!DejZfDGoQDvb#8<7gD}`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

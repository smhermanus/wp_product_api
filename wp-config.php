<?php
define( 'WP_CACHE', true ); // Added by WP Rocket
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'captivity' );
/** MySQL database username */
define( 'DB_USER', 'captivity.co.za');
/** MySQL database password */
define( 'DB_PASSWORD', 'U}4AzGRuW$p7' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Kq0Tc~.+ #aab{FmPVz-CB!Ni[X*7/{3wMB5o_Xtkos{Wy=x1tahI{K6`V3.E(Bj' );
define( 'SECURE_AUTH_KEY',  '}~W)a#FWYGm]0>c6LmMeFA@,Xd,~#@wmw; wps}71[<1;H=CmP`5!.ITFv^vjcCx' );
define( 'LOGGED_IN_KEY',    '_5^u@*lt-F-HWs)~m@N+jJ`)R<6J{Bx)zi%Z=oFzHi3jw4b91{a~rN*u%eQhH+wL' );
define( 'NONCE_KEY',        't~mV:/fc4+4qALbTZJG]5@j~MZk7$Dn}ZfdMig/xb<#/pe`Vj<83|H2ye>l8@yeX' );
define( 'AUTH_SALT',        '79XpCx]?I@>bE>[(*i7a1O)]-KDx>&CWm>pqW+kth3Z}#rh$d?.Q}:Iv!ywKZT&.' );
define( 'SECURE_AUTH_SALT', '!#mv^;dzM|z^WBR~_u-[-A!Y!MID]C1S.0L~!%DpSF_?O3zg9mO<_)?(i#irP#&:' );
define( 'LOGGED_IN_SALT',   '*!q+/Q_W|9/}^TX~u]c2(u.yObhJ8Y&QW$r2{_<2Cid[#@:3EAx?EV;b-amncj0&' );
define( 'NONCE_SALT',       'X/bS`mPrn){Z1}F)Yu,XF6QyH0y5sj]m#%y(HVS[Oj{ann@#%|T6JevpK!JG9J,]' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_captivity2020';
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

# increase memory limit
define('WP_MEMORY_LIMIT', '1024M');
define('WP_MAX_MEMORY_LIMIT', '1024M');
set_time_limit(600);

define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'captivity.co.za');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define( 'SUNRISE', 'on' ); 

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

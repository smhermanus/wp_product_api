<?php
define('WP_CACHE', true); // Added by WP Rocket
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

define('DB_NAME', 'captivity');

/** MySQL database username */
define('DB_USER', 'captivity.co.za');

/** MySQL database password */
define('DB_PASSWORD', 'U}4AzGRuW$p7');

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
define( 'AUTH_KEY', '}f4`x9f/}}Cz@g,!@_E%6*1o2EdMW^11%WCdMXukpx?DaJBE0*V7bEcHb!U *W9p' );
define( 'SECURE_AUTH_KEY', 'yp2,:bfkFTC8GHDH~z#g0RF/vTd<f,#Fn!E1=mGTWRtZ-Fu-Hd:jhTOzWu*r.yK(' );
define( 'LOGGED_IN_KEY', ']69nt0PK]hw<XD,!rM_0CRXXWo8xwV7>ocvJ3I_[Sw_$L|1-n@-BV5q/ucWbu;!<' );
define( 'NONCE_KEY', '*|#> zg/~*)n+<6&B|uKfS6(^E%cGTjp/g !S|U<Wm7jr!RXEa@H?HRvJ}TG|*v-' );
define( 'AUTH_SALT', '|9cS]1Hj YM@n2+O]@@o{E$yj{@wkfCC}{,S3`KQ2Y,MHia&T3^8RLpGdi2G%O6N' );
define( 'SECURE_AUTH_SALT', '_llgbt2pV}&Hq$4w:Iq{A918-sNj4D3V=5 b= ]XU^Z6]+[pCI3@)r}HjOQlW#lu' );
define( 'LOGGED_IN_SALT', 'p?-mJW:guKx(0+dwg`5G0+DLq]Y5ra=UjE{As;I+0WGp(`-NrL,[IvY&{DFGZv7V' );
define( 'NONCE_SALT', 'Bo<o|Q6`Tx!JA,4?;v@#(w@XU-z_V8h[3Eg#K=#KD^kYjp<vP%G1!8:tO)1d2aDw' );


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
//$table_prefix = 'wp_TVambm_';
$table_prefix = 'wp_b492UT_';



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
define( 'WP_DEBUG', false );
define('DISALLOW_FILE_EDIT', true);
#define('DISALLOW_FILE_MODS', true);
define('WP_MEMORY_LIMIT', '1024M');
define('WP_MAX_MEMORY_LIMIT', '1024M');
set_time_limit(600);

define( 'WP_AUTO_UPDATE_CORE', true );
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.captivity.co.za');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


define( 'SUNRISE', 'on' ); 

define('CONCATENATE_SCRIPTS', false );

#define( 'WP_ALLOW_REPAIR', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

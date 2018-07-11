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
define('DB_NAME', 'wordpress_prueba');

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
define('AUTH_KEY',         '6{F7L%uX-AV[k b##/JSZ%_2k.eD=wN0m}B.$$_7^;#AkiODr/@le[#zEsJA%g}a');
define('SECURE_AUTH_KEY',  'iJO-xHI&C*8g!E,^t+!~nmx4Pj;/l%{{eUWWR`b {@Dfu8P(lOuNQf++/E:VZ{My');
define('LOGGED_IN_KEY',    'Zni4[>QG90Hn{Dv?a[oTME} e0,Ffx_(uN(/4R<%=2i[*N%A]YFD+5mFGq}#}[)#');
define('NONCE_KEY',        'q8ofS2!Q2*]mY}|{Z_RbAt=c~;~-&#k5}L`VAp,B}ImpYgU9xD%jBQ.l])!HM*p[');
define('AUTH_SALT',        '00jE{Oe`O?O7]I`M0mk&/xf>ZRm6gatgQEkG 2tq++sMpE2Q,8}d p%kk4pAAj#b');
define('SECURE_AUTH_SALT', 'NTYY~Va*Zw$vfdu:XrH>Jd+<oQNl:^aohn2=cg3N=h}yLy,gG5c$&:Gi(9qux;8@');
define('LOGGED_IN_SALT',   'Cc1^gb9)2wob)>s*X^<L0=tSc:]AdqpzFl#n?UL];DxbX*tcfsY%#$?Up3!J}Po?');
define('NONCE_SALT',       'j.G1%]JjYNcp{8vG?%E}W[IQ_uf(|V*d<B-2`tk:[fb?.J6Q`W/RS#IWf$pz[Vsh');

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

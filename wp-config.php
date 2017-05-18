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
define('DB_NAME', 'sphn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{I<fnsfTVws!21!PS`:!-*ck{}:lBRuj*lTULTYM1T!HA0hr7;x5k#|cgI!nQ3hH');
define('SECURE_AUTH_KEY',  'AkyK&X>6DW.a~ZK:%)(QW,&r8SO |[fpGpiP{AE-(2fU)P<D2Jwk:8jSXT-ENHG ');
define('LOGGED_IN_KEY',    'u#DbW54T^]O#@V^sz7mxY9$l)NeEZ&a&1x5gjJ<g2=VDmo@c?kEa1x]knOxd+V*G');
define('NONCE_KEY',        'q6O d2}iUec18_QbFd{Q~c~,hnk9xFQ+*#O&8#i! carR,zrq3vk<^z?&&v=U4iG');
define('AUTH_SALT',        'Z8ukSUtRom[$oKTP?3T:Z5.%H%lp-^}qKL7GvK!4A3]P&l%x.e`4>Lh+XncTJ8JG');
define('SECURE_AUTH_SALT', 'P6<:a>K]Mf1NHu}~c8@RM~x(oAT9XHgZNqmvi]+gi8V_54H+7[9!xd,eltN*n=CA');
define('LOGGED_IN_SALT',   '^Uo2Vb*ya-dF`_Jc;q^`je5<}1x)yGd uE#]5#t).FKq#X)?M<f7t]@iIAvi9+|$');
define('NONCE_SALT',       'B:EGZDaY[yYm!~&]vW<Y{CaEaJjxwO<wE%6l2v2IN@H.E~^>P6%3Qe?/dfJaV&}M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sphn_';

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

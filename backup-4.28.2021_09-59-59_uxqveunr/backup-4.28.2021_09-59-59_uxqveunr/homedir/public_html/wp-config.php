<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define('DB_NAME', 'uxqveunr_hlalanathi');

/** MySQL database username */
define('DB_USER', 'uxqveunr_lisje');

/** MySQL database password */
define('DB_PASSWORD', 'Temp@1000');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         's7DY*wbn]j#~3kK{L;+m(gapueZU8D+I]M*+c[mbA?%%Vm+UsC]yS?uZ w#fpVb)');
define('SECURE_AUTH_KEY',  '2~N}8%|.!jhI3Dhd9Y5 8iO9*:lq(!zSN+MZD!`{:9jBUr]GcLLuKDM5ndw]Q6Mg');
define('LOGGED_IN_KEY',    'uPsD%;4]l4 >ZV^6,s-0.GY!2qLPsBV5^j=1tM=[bi$$]NgId[|aWgF&H9(N?<df');
define('NONCE_KEY',        ' #Pl^Sm$_*V?SxlCC<~}kv<+E<j7>m*+V~|&P]V.!/_H?;JXEzbq&@Wx^Tc#<_g ');
define('AUTH_SALT',        'qqEm+G}$/7SC/Mco.0i,9<{.3&)SqrJ^ [A*+;6sudYD@;>6;ED3/q>sV-?33prV');
define('SECURE_AUTH_SALT', '@^73w%dA`56c+n_#W[p81>e68/(-:HGzboK=TrNY-nK8)Buw>/Oc>6)Cf@[0;GqG');
define('LOGGED_IN_SALT',   '6PL/o,$cQkCD${v-d}%3kP0eaa55w9H`n(wg?CZ~;@+khy:~=v$zKW,ihh7xHK<3');
define('NONCE_SALT',       'DZIXZ^4}3GFTpXpI,9$C5iI b8SGsF%gG mgn{MJ{4J@[7;c$_zfvdqCB{?o*2%0');

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

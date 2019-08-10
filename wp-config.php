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
define( 'DB_NAME', 'yntconstruction' );

/** MySQL database username */
define( 'DB_USER', 'yntconstruction' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lingab11' );

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
define( 'AUTH_KEY',         '?^uAh89e8(AL!&dOjV l|YwMvGsyzx1C+@9Tld#8s$OCop~Nib*?}xY!1:MohIpo' );
define( 'SECURE_AUTH_KEY',  '*HZN|*hQ~qLWGf/4`FqIaFY+X;@_rDBi:CZ`grhy~h|&V~Z&A1y2BYXJI2/M*ap#' );
define( 'LOGGED_IN_KEY',    'N?ggz.b 1YVS,Lu.zFv@Fjm*{jv&55-sehMvzTFd^HY;^~xauW52@Nbk$kcxX#X4' );
define( 'NONCE_KEY',        'j_R8>+1lqGb4d5?Xw,j{H$#n$f3n5<K`SJVZ+*@~ _~b$6~jsnwR42/# Bo=hr`.' );
define( 'AUTH_SALT',        'qWEYuBelqk)3%u#&8S}=|r?8HVP8{$Ez5f2^1WGh$5zFTO7*?>@&tEKaN_&Kqhj(' );
define( 'SECURE_AUTH_SALT', '5f3XjKLPj9?EAhr38=U9KVDG4$k>zG8gP4q^ >*&%EfA>c0;|d3n}/foCL@KX[hA' );
define( 'LOGGED_IN_SALT',   '|+?5{:soVI!nnW Sx3.G L@`u%flLu$U)YyS*1PXNCu<}*vWy%/9KG?}dLvq])*+' );
define( 'NONCE_SALT',       '^T=aKOCWM(L+$42(_p MYayOjD!E7<?_jyN7larHs3AaCPo`^y)trOsGe^*;|qUj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

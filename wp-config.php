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
define( 'DB_NAME', 'wp_first' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'WC6%MVboFpmHUrKjCUw+N-g*g_!q!RgJA1]/LsCU:JbI_1I]f*3Hm7}Zh;ekci i' );
define( 'SECURE_AUTH_KEY',  'US7dnjGpZ:>vU8gZ.f%S_%EQyNapG}$Y!?q]c j0[iA`?g4$TGSc>>o(D(#IT&VO' );
define( 'LOGGED_IN_KEY',    'hwso(#e[]phUM`% </$ pOE|uY(t|qQucD/ulmD3rK*bApvGY<{yjOvjNp_7&PbJ' );
define( 'NONCE_KEY',        'TW!`+BZnL18tkB8M+#V^j-oG^T/jJN@zkx)>9icu)ah{2bo%Bu4`H-9%.C5C1k<K' );
define( 'AUTH_SALT',        'i0[_>?*Qyj#Y:VvmN#(^=hqqYZD7ts|N#HGnL~CD;rFr*lzw1vy8!Ejry#=N=sa^' );
define( 'SECURE_AUTH_SALT', ':hDO<koKi>p/9_vh=M&qnxG7n9]hd,{/hZ0PGS{jqJ3dNQGz[O=i!uRJwJ%{uqrR' );
define( 'LOGGED_IN_SALT',   'gip?4!II::9|90ENVpsx6p^SFv3RSUubh]:O+?h-f?=[=}j36`V_N}7s5{~xcTPE' );
define( 'NONCE_SALT',       'BL.a@UlMx@Ay8{Ag;2=K5tbSj7bGDW=s5UOz.M+>DAg{yVA,kEE+Je7ah ZQmaR)' );

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

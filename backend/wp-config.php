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
define( 'DB_NAME', 'modern_portfolio' );

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
define( 'AUTH_KEY',         'mEw/F)&(@ dyws>Ah>XS/ktBI`i+[ 7b!YsYIO8!I]qb32*oL7nt6u>kl_mfkgel' );
define( 'SECURE_AUTH_KEY',  'C3E|wS.lKZ67&){27kuU722#z%9RlI_ {;dEUp04@=$E?(KPiXH/BG*}F_cmBpuP' );
define( 'LOGGED_IN_KEY',    'lhB~n0y J/ptcQ2=i5q(z^^`l8<.<fI b2SL]:Fd/^L3{}u{3i$)Ed)]R|=h H%(' );
define( 'NONCE_KEY',        '}.bNbAHl$%Gk+Mr,E@Z62g#M*TNS+vcj,3er|wC^pnmPb|$9yBh~x*8eUSiN{H/d' );
define( 'AUTH_SALT',        'JfWbC$TGVo?22}qO#X7L)gmtj_7U%VMuaKcN{k5X4I~`.IvT:dbZ@k&v0vgvQS+Z' );
define( 'SECURE_AUTH_SALT', 'iRIhq(SugqN~t#?8&WMrP[qIXso|c~a j%cE?n}RsET6ESb]fxldF{GEy)4F&lKx' );
define( 'LOGGED_IN_SALT',   '{plvuHH<#65IuTwjZR2j7LaWOMGMS;jfB/ZjrWMR2>V*UV]jqj(?^yh`3MZOj-~c' );
define( 'NONCE_SALT',       'a%^[H{k:B?)]Q`+P5+J<KQE$4YaL)G&SB;9-p<!1+::HxK<xL_vezLg8Dq3CO3>i' );
define('JWT_AUTH_SECRET_KEY', 'c0b4602b-994a-4636-8d53-4167a6df273e');
define('JWT_AUTH_CORS_ENABLE', true);
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mp_';

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

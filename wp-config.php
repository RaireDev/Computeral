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
define( 'DB_NAME', 'computeral_db' );

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
define( 'AUTH_KEY',         'fxMR[NF}^)*t9/G,I4rssA*B(4UhAN$cU& 3vZtPuBOJhwE.`H)Tngo}F ?<)K9d' );
define( 'SECURE_AUTH_KEY',  'n-3FZzSqU)Q 1[v8>sEqsie[:QWP/26^AkT5*dPevbkeHh)e2%{9/fnWW!+C;:Ew' );
define( 'LOGGED_IN_KEY',    '*.Ar3piEWrmW6YVy/F 2v{`GHo?q_ciBcCYbMcC f2Ux(>C48x9KL;5A)xVY($kK' );
define( 'NONCE_KEY',        'cdcDsoCX@t?btm=7F]mrX[xCc`Iv>A]I9?Mvm0V,2r-k=M`*lwv2m*NRx{s`%VM(' );
define( 'AUTH_SALT',        'QU(zfoJJ:ch/5e^-}(x%_>[AfE$($ DrqJxneP*~M,fGIk+xv:M <^DjE~HZQR2j' );
define( 'SECURE_AUTH_SALT', 'lwu*,_bBXZS60D[l^`FA+a{@D/Obxj=H[2z+gP~WqmZ{uy3(c+zXB1>PevXLjB&S' );
define( 'LOGGED_IN_SALT',   '26AM+6=tsQjz!r#!:YEo 4dp3qLCzNrVy77lesJ|}:?$ wM,mEo%%DlInU|B{g0#' );
define( 'NONCE_SALT',       '-E,+{v#jy:OU`-=MPFLbk-Z83zR!pcyPch6>K%Lk?mU+j7@zg$,n.Jp~QG?5_b*i' );

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

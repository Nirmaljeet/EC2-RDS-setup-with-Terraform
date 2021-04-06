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
define( 'DB_NAME', 'mydb' );

/** MySQL database username */
define( 'DB_USER', 'nirmal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nirmal1234' );

/** MySQL hostname */
define( 'DB_HOST', 'terraform-20210402143852871600000001.cvblfcozhbox.us-east-1.rds.amazonaws.com:3306' );

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
define( 'AUTH_KEY',         'G@oBUhFW~HzyyT}xWWQHZWt91P_*:.#V#pk qw-FX0pH:vp#yf?f.I7[0cqKPblL' );
define( 'SECURE_AUTH_KEY',  '_vW%d.E.#xX,Xt==I1pUpMfF1GjG`4l^g|8w VJSEr3LNc,Y>xG2lWYs82jP (2o' );
define( 'LOGGED_IN_KEY',    '71H:?$|R|M.2S[FNdp[} :JF=&fzoyv55iEQ;xpj*> eP([@pF7IzYXep<&f<XwO' );
define( 'NONCE_KEY',        'X%Yg9L}l]2HurEk`_kB4jo|&kGtxgo?).BYauoG/HZhw&FUh6 h2jNt-~I.jx`k@' );
define( 'AUTH_SALT',        'H,85T`l;fYlE$7w1:Z0dK8:PJ;N5d7KM08C.I@?*3%d1}RKSKP{|P)K$.{l=X[bv' );
define( 'SECURE_AUTH_SALT', 'r(4G)5n4^lB[h+cnx:.t&yosT6+$@0S7S:xt+[6nI@AID{//{kdg ->-)eq>!r:$' );
define( 'LOGGED_IN_SALT',   'SxA84.wJr[hOT:BN^(u;IP3?Wk|Ofs666q9F5D)OUi$y&_Vb:V#Ve.ste7Oz@ys7' );
define( 'NONCE_SALT',       'zf-FLYGgBij1|ieRUs4hJ].3O- S`:lH}V}WY.~1kOkQIv,K<Jop Bs8P6D88OEt' );

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

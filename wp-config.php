<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u789473920_IXPSv' );

/** Database username */
define( 'DB_USER', 'u789473920_kacTu' );

/** Database password */
define( 'DB_PASSWORD', '8VYNMtBbLj' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'V=zzG,|-@n}Kezf$l3]|Dy6YQ.=s+.?c ?Ndb}&)T5Udx:m91N^Jo~l{v`(J 2}I' );
define( 'SECURE_AUTH_KEY',   'v->rk<loQz8^!88I;=S`i=k1Fu?/lG|I=b7&3w?7fAz)-K]gpLVFvR]}.8Yl,8FE' );
define( 'LOGGED_IN_KEY',     '4A+V+JE;7$L-I]HEa&BF]|z_mTT]Vt}Jtr30c1y&tB3m1rDnu(u!Z`qeBE-zY0NY' );
define( 'NONCE_KEY',         '&r[:Bl/ysw<-L$)%eKMqmc}FqVyOwecNXS=-iH4$q`cgH>@9o|f89Zq[up#$R%*V' );
define( 'AUTH_SALT',         'puQ|J`?z(CElND4`FucGXXP}.^BIWkY]e,X)cVA>Oa{Zb1o}rZLk=Z)?qwXZooow' );
define( 'SECURE_AUTH_SALT',  'zKB0K2BT}X,+/W=mM0/w|hH|~nw%8xVF/xBnHvCy7+@D1(dP *Bs$}4CE-_Xthli' );
define( 'LOGGED_IN_SALT',    'R/BIT+([s<;0|onGYvHP?vluo.ayT!h>RyK5!?-+el(7odoC<9B4hPBg?tj`p4[-' );
define( 'NONCE_SALT',        'Al*L:,0*#Q,@ro9V6Cx.e>:aE0R/A(=/5J?8b]T.;PrRYWyowwLRILDh;+!|X#F:' );
define( 'WP_CACHE_KEY_SALT', ')YmydbIZc!V#U&.P#mXl}i_dhSI1*A<M^s_,(dpQy*jA-{b_]pA74gd>|=(i)_S[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '63bd6eb30819c4aa0999fb2405808e4f' );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

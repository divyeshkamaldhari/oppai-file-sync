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
define( 'DB_NAME', 'u689060721_wqQDD' );

/** Database username */
define( 'DB_USER', 'u689060721_Oto8B' );

/** Database password */
define( 'DB_PASSWORD', '75gVqS6Uh9' );

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
define( 'AUTH_KEY',          'T( C)Z[jXd{/]1f#,=8gj,-2)[gfvSc=<8aQ`&yF4_}I? RF!ypDf`M7ZU2iI?Jd' );
define( 'SECURE_AUTH_KEY',   '[;e9h A[NU]y?MNI8TXP}j{hh@j2gWr`7}=D;YiCi:{M-U^v,=3ONr!]9 Qz(~%H' );
define( 'LOGGED_IN_KEY',     '9Z Z-0xR-cX4]$VG?8bHue[t+W`gh^9dAx zG:%$HS*g0y -vl!I6lFeC<Jk8bq=' );
define( 'NONCE_KEY',         '`2[@<3/}8E-yO>!/eaF&)jh?uGeoh@.kRYE3)=<mGV!H5OQr5PUhAcC5:$V7&#$/' );
define( 'AUTH_SALT',         '-.%xDx+KG%`u(p)KHa<i#YmsNt[,|t<Ej,VvK/Uad7/R@w6kIj}93?a@3DXWTi|F' );
define( 'SECURE_AUTH_SALT',  'kSDo;+#+>dfHgW4z=KMM/s)s6)R`Uzy@rV_tn}~0FZI8]^?)%f:=vxO;=])i~:tj' );
define( 'LOGGED_IN_SALT',    'j^ji<C^C6FD@vW4%@3^p,a&GSAn{O434 Bg7fV[jBKKeh;q)kv@u9W#o0#WG9g.s' );
define( 'NONCE_SALT',        '#!2{ g8V<r$Wy>>5^#:8g3m`@2IrdC<{d82=^-]L|efT4)cI9*fHqRJ8AgU}22F^' );
define( 'WP_CACHE_KEY_SALT', 'O,vG{%~!k-Aj0|R-QO_baE0TQ548%_ayV@vitr_*8{S.}D/6 7q_(zmQe)q&)L/~' );


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
define( 'COOKIEHASH', '6d2e5d0b65e7083b72581ebadfeaf7b3' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

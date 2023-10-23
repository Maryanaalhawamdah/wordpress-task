<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&6pUQi)/`ep ,2S7R#f(W{;7Su[Yz3lDg+,&I#pcrNy< E14W(6>dGPNc:/x?)!d' );
define( 'SECURE_AUTH_KEY',  'Ob|F<(3Z`>5+#jr4wSF4U8W|6q^E#>x=B*`TPs9r,dA]I~C-=/grtg%mk1pTt}w7' );
define( 'LOGGED_IN_KEY',    '.9`NuMv%[cyf2~b#wD1T_ 8X$F|1^wSe c#^#w;/y25kEd_x`2>!,N;S2U9JqBw1' );
define( 'NONCE_KEY',        'p^W_?VZUDJ98-tp*t^HdidKb<F]zqkV]WH1Hxl*5^T{&b>d=&BAx<bxYG<f8P;TN' );
define( 'AUTH_SALT',        'e>^[w~o?drHccWE9Ktv8u`.w*qR}--vUbg^}!PA;hL B9 *7-g`SE-bm(P2P!d)s' );
define( 'SECURE_AUTH_SALT', '1Rr6t|mE .b##/(!Ur!VT{f_EyeEO(1f3+{$+11]?<]^E6h5DV7b_T,U`|%z)t~r' );
define( 'LOGGED_IN_SALT',   '4,!D;gB9O]$|Od/&5Y[O(|A0?r~>o(H dKurK)rF$I4<xCd+%*+)_W&2PB,D$<dv' );
define( 'NONCE_SALT',       'Dd(*){c_,kdf,$ranuM-G%j%X4T+RHK/IiADBzHC,{BAPc!DN;&4+?`3TB5I9o9E' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_custom_theme' );

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
define( 'AUTH_KEY',         ']rE]%V=SG%3u6^?<^[3_;{caM$rF @&^QJ!5)HHaI!;75KWXVCt9)T/6;o#fLYhq' );
define( 'SECURE_AUTH_KEY',  '>rw1O9uKmh#zUql-V*k4l[R{C`c)pSi3eWU@%x#2J);fBZ(Ka-tqO_h*u45|[7B[' );
define( 'LOGGED_IN_KEY',    'eD]+Gk8k!1d N99FmXfNU~$uN4*B8q@`SXY9(~I 0Gn/aA1iYyV>OWM2B_F([bLA' );
define( 'NONCE_KEY',        '6J[Mv18YS!n-9iacfU=A%#S;=&6s:mKtY*Svw<mV<e?lT?[mr*TL2XOd}(&Tor0L' );
define( 'AUTH_SALT',        ':;[isDP@:9kZcskS!hFJ#2hR8H2!o>K1G=6%zoS3xC/7f:Wq,D%C<)JR)3O}[lz4' );
define( 'SECURE_AUTH_SALT', '6@t(F=Y~(G*s&K8j8&:Y=RlRD?4yk1KzL,ucPNR 9(o2f3w<<Bxln|0X|{H19Prk' );
define( 'LOGGED_IN_SALT',   '`Tq-hrK,|hV6[hXm#_s~&(+v,6wn%<T`r8Vx_//$vY0C)1lb}U$8kpw4qTaV0J8u' );
define( 'NONCE_SALT',       '?h@?.l{1f[6,1mWCY&Y.xJcfJoY58`eF?z,T.ux<|(qy`vR(Ly#94gG/$a>eqzl%' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

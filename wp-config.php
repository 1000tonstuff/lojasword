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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'JTTf-_WWz{>EKI7QyW[T__(0c/{oXzJPfSr|m79.[#di)^UzxRz>pS_ZU)DO:jiL' );
define( 'SECURE_AUTH_KEY',  'Cj-KwcGQnEC7*c),8cJ45G:GNUzsbE+Kyq+f)xp>[b45A1FfOBj<%%J%K}P~H=AI' );
define( 'LOGGED_IN_KEY',    'JnIfcd@T~?(mQ/sY`AO jsj!YwF5fF9!r5eEe$B~P(?@t`^7yMinL&P!f?JVm=Ep' );
define( 'NONCE_KEY',        'DY=P3{>g{.pq#|s^0K^S#o@*_hH.NPdNQ[JAmhU^qaa/$<7yoUV&_54}Ot<3]keJ' );
define( 'AUTH_SALT',        ']j+k3CUupwaFrC^.DkKsSdW*`H6GUMVJ]RIEo:4hF+cq(tU%jCba%4u]I/zP<h@y' );
define( 'SECURE_AUTH_SALT', 'KDe;F/{PeH)-[|LC=pFnsS_ eq-J4#Ri7FvxtOm-NCf[h>[$ea<h,/KZU~ 4o],`' );
define( 'LOGGED_IN_SALT',   '_2C5W$(K)Iqd6JV{{!xB!FA9)Y.u0Y}n0T&&I*Ct8[HRV s+2`35sIf|)8>]{O#D' );
define( 'NONCE_SALT',       '%nj`zoas}d#.KWn%Ysmj#*g?O.|t_/,s/~dkH%7l$wZU-Rrs=.t4~bL}tEl0~S5G' );

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

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
define( 'DB_NAME', 'cantata' );

/** MySQL database username */
define( 'DB_USER', 'cantata' );

/** MySQL database password */
define( 'DB_PASSWORD', '!4321SsaP' );

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
define( 'AUTH_KEY',         ':A^J@-x6DZTo+ZQ SL%b]Dd`4VNd@jgS|Ul{LiY+JjPCkY3Dm}/Ub1!D[Jw5PR8g' );
define( 'SECURE_AUTH_KEY',  'hjcdm)$%tH?NI>`5[~{n/{h$<@WzM8rccd e-=4K>Na|@zCSvy:}BJ0cr&`8nq`M' );
define( 'LOGGED_IN_KEY',    's-o~T~Go%]BK6RAL&L[MSVyNVDq0Hj&]#M-??8+UmEft33tf.TPs;DB6%uO{xAxd' );
define( 'NONCE_KEY',        'ANR8LpD7Yp{jER7WNq3,l2eo<TpKU^ F3v.f #BEi EKM)R3cF;wN6gc~(1d4xJ6' );
define( 'AUTH_SALT',        'u#xmSdvX+Gt*G)gmq I|,Jpb9/_4gHIa?^+_`ObNjy)j^hayB=6~Nso[biJE<apP' );
define( 'SECURE_AUTH_SALT', 'e[S*ES$h]2oTZori-V?b@Uw!(G{*H#<~aj&MzH0>A|s>,tWZi2G(#M%+-/ELwk_3' );
define( 'LOGGED_IN_SALT',   'g%4sO<zRkhZ@hNU8bMqCM/oh^dj/![n&~lOGR{D!0S@FtXL&gWQ4ai+z^:@T,eH]' );
define( 'NONCE_SALT',       'V&g`9vO0[~[HVsxGV<J}2tnvBi]YikdYGV*ePm=N*_2t</(AUs[i6snXRx5Mi@u9' );

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

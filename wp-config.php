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
define( 'DB_NAME', 'fazendavilarica' );

/** MySQL database username */
define( 'DB_USER', 'usuario_fazenda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cl159ss' );

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
define( 'AUTH_KEY',         ')Kz9%Gl^N>C]tZiMv;b^<UH8A9BpcqanU^v=v]t0^Y9yH3C5=As+2z)bu@n-_-JB' );
define( 'SECURE_AUTH_KEY',  'ac._T&TT/7}{I2Cvy4M0p$?aP<6d]ExnXz*=zMzZ;N[_Z%!:@a#cbd^?))AXNBz7' );
define( 'LOGGED_IN_KEY',    'ZL*<pi3XDo(+S3&(aW>T^{tu<<[d1R7 X[}11OP[R?|(r_WC *7Celn,7wlz> NO' );
define( 'NONCE_KEY',        'ldle3hTt4s<tH Y?h#!&g8M}.H7]y]o6HRmrs5uoGK_KY@QmxAe{ID+YyF/B-gD0' );
define( 'AUTH_SALT',        ',W/+xu%:ok-_</Rp;, {RO#exTDSbck*l)(_k9rr%<J4t)}T`a@:a**U44hf?(Im' );
define( 'SECURE_AUTH_SALT', '[deWmw6]TA7yRVx$Q5!QiDb#CR?YBZa@_<}Jd5{HP+M:{q8,!!TW7qs!h3S3o)^#' );
define( 'LOGGED_IN_SALT',   '3R,ZJ!BtVTnSC(20f)]#m93K`&.W%H=@HF{^5;HM=}7)R:`WMQ01&PTW&HLI1![v' );
define( 'NONCE_SALT',       'J-SA.md3|X/hfl-?Q|X!/3SEkWe^<~2ToD5|>A)~4;qVek~7dpRon0#OGm&,=&BT' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fdz_';

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

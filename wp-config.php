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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'menta119_wp732' );

/** Database username */
define( 'DB_USER', 'menta119_wp732' );

/** Database password */
define( 'DB_PASSWORD', '7p6)[ZgSZ4' );

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
define( 'AUTH_KEY',         'qcm91uhvyyyrr3d9teffjilb2cpp1p0n57qkpw7nffx66o4duo4cy5lr0qsd0l9a' );
define( 'SECURE_AUTH_KEY',  'fy2asgp1ismv1diae2kynljnledvbfxgewvcesukehatsnvr13id9zljdzode5a6' );
define( 'LOGGED_IN_KEY',    '9t5jfn8d5bupybkxcdhr6o9bapwcmrz3hizpgssu9zijx5v5koqmbcey7hu15eod' );
define( 'NONCE_KEY',        'f24tedmijs2vua8oc9manyitgwoqdof5pizffawbe9qqod3clkqwmef19oj5gdi4' );
define( 'AUTH_SALT',        'p1dmkuvqcjcwpn3u5pq4fog2vte8hymktcv7zmpdf9wiiylsf74cgdmrcsako5xr' );
define( 'SECURE_AUTH_SALT', 'r7uvsqxmamhhpzsc2happyjovoam5i7g5oxhhexliljlknfmk70xlueq4ehfexbr' );
define( 'LOGGED_IN_SALT',   'pu3xowzynnz3aejhrnbifkpxrjvbatorcvof0xzodtdkh2aohz9z28yxkrtluntn' );
define( 'NONCE_SALT',       'vhson6zqifcvtms9iolzhbtbwtwtlssfp1fblpudahgoekg5v4yj54snsqw121mw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp7f_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

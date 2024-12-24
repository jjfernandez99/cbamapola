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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gkvfaywj_wp939' );

/** Database username */
define( 'DB_USER', 'gkvfaywj_wp939' );

/** Database password */
define( 'DB_PASSWORD', '-8(7Sd46pk' );

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
define( 'AUTH_KEY',         'hlwkt7imim9zprtjqm2qsmo41wpx8eeeasqstwnynejbyyspr7mew7qxppintquj' );
define( 'SECURE_AUTH_KEY',  'uq8rurvxmj8kq6da6b52omfwuzlhld5peb6nxxk8sltxia2agzcxqeid3nksacgu' );
define( 'LOGGED_IN_KEY',    'iydee21seicrbhi4fdchmdd3o0p5vndkagx1z3f4055gzzcyihsudlztfqf0jvfc' );
define( 'NONCE_KEY',        'ntspytac60j4zqeithzcwo79aquf1jtfa1fe9qanaiyftwb5geefsvtqh6z2gnzx' );
define( 'AUTH_SALT',        '886hxujk32vqegbuync1bkt5hzv2ludbwpyhbj75d5dutnqtsdlttyyt8gleucyb' );
define( 'SECURE_AUTH_SALT', 'o0d6ovfmld936junuy6o5opfqjo8dzuiubnjftafjewkicsfzopfg8da3tvxdtcq' );
define( 'LOGGED_IN_SALT',   'ewfqmlrxkb8vsiwz3cv1gu88ckyqcypeuo9hrcx6omfujrzvvff1x3nry2cxehz0' );
define( 'NONCE_SALT',       '8pa2qkrhgjbboox7ddmcz2pm9tqnrggwl4mc0xbtzcnk2otyag0wusclfmd11aym' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsh_';

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

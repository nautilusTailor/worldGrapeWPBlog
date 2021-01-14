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
define( 'DB_NAME', 'exampledb');

/** MySQL database username */
define( 'DB_USER', 'exampleuser');

/** MySQL database password */
define( 'DB_PASSWORD', 'examplepass');

/** MySQL hostname */
define( 'DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b1fa264fae91389e5700a13b5048d60c54570e08');
define( 'SECURE_AUTH_KEY',  '582f7f42d80f071df4ef35d8396d0b52dc41a906');
define( 'LOGGED_IN_KEY',    '6d8f34eaea0cbdfb1b67f47ad5be415d0ae0cb2a');
define( 'NONCE_KEY',        'e8a7b58b0e6dd3b0f97f841f58b24bc9e29a77ae');
define( 'AUTH_SALT',        '93ef0a204cdaf92d11b1cdc5ead902be8367b860');
define( 'SECURE_AUTH_SALT', 'ed232da470dee5354cf0e01903aaa4c1f7515789');
define( 'LOGGED_IN_SALT',   'c0f408c38358f5a2811721f44558e6861886ee10');
define( 'NONCE_SALT',       '3c7241e2a12e87a2f98166d95e057f04a6137bcb');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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

if ($_SERVER['REMOTE_ADDR']=='127.0.0.1') {
    define('WP_ENV', 'dev');
} else {
    define('WP_ENV', 'prod');
}

if (WP_ENV == 'dev') {
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/wordpress');
    define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']);
    define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/wp-content');

    define('DB_NAME', 'radpress.dev');
    define('DB_USER', 'lookrad');
    define('DB_PASSWORD', 'W4nd3r1u5t!');
    define('DB_HOST', 'localhost');
} else {
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
    define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
    define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

    define('DB_NAME', 'radpress');
    define('DB_USER', 'lookrad');
    define('DB_PASSWORD', 'W4nd3r1u5t!');
    define('DB_HOST', 'ec2-52-26-64-89.us-west-2.compute.amazonaws.com');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**blah blah */
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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wordpress/');

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_CONTENT_DIR', realpath(ABSPATH . '../wp-content/'));
define('WP_CONTENT_URL', WP_HOME . '/wp-content');
define('UPLOADS', '../uploads');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

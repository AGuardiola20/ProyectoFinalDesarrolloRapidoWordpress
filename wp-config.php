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
define( 'DB_NAME', 'ProyectoPortafolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'KxhEjenB8rGae5wtDl5OLcBnrWFFgjVLMVcsHFe79IaNLZEYYf0KMnQy1mbITU6o' );
define( 'SECURE_AUTH_KEY',  'gyo2u7LDwXO2NADiWVrTyZc2OY4A41oosm4hhZcmzBQk7BR4ZKimfc3UcseNI06X' );
define( 'LOGGED_IN_KEY',    'MzupFZ0GVtWSm8K8fwOYkMNGb1suQGR20NU8SjaB1uwSrd501frYI2egoygSwn7x' );
define( 'NONCE_KEY',        'Q0uJR0Tyx0bNnllAN1TvUszu3Z9IQkjLDXHcxxf4o2nQxl9rYZQsvo6jUa163MjH' );
define( 'AUTH_SALT',        'qhlZ5CYhkYwMQjrGAoFui3wtpU7f3VKDVQrxgGqGKbqfn14WR1xODlD3JissfkJq' );
define( 'SECURE_AUTH_SALT', 'azVChkh4o6PK0mIUDOdjqZpIBxYGuxx9h9ctYwzU895vivm2rgsxj6BxNA1MUv5i' );
define( 'LOGGED_IN_SALT',   'XvanhkhgzvVT1QsnA4RTQGtG9qqgQyE6spnqtf7ouNLU4wpmTeGeOzXKlKNGV7cq' );
define( 'NONCE_SALT',       'sHWG5yP6VmFaO0kzreGAtAuulj2Bb3rZJn2KFDTwVkVSZmKkZSbmm2tLipdX4DOn' );

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

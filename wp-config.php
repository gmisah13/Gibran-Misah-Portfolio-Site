<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '+CtkwZ8/dOGEXxvj8XsPZ8UOwMqwOPdmfelI/mk0mJbrEvLUVsE7G8kHjH7b2DggozC9TLVnIeWWlf/HwRlckw==');
define('SECURE_AUTH_KEY',  'b8+JlXIR/Iyff5WTtqQgSTsYBEuCVmrhk3h9wORCaiOV0ykTdoBE8RYS1pO0k4Svf1MGk9KQ6DFeeKeTCekcAw==');
define('LOGGED_IN_KEY',    'WvGO8CyVFjq7fCC7D/37mXhbHeJgJiosaRnYwMfeZPPHUClQIkvkCxHTy6Hsj2QaqZKf6XywsiJekq/JserP/g==');
define('NONCE_KEY',        'EEmTy+F2/7cv6r+jb0WGguEye/aUV0ISB2VPnzuQuTzkoMB54WNDLOoKGUenW0MEsJRJc0yfHDbCyT5Xn+OMhQ==');
define('AUTH_SALT',        '5CSBJln9D3XpB7LB4PeMrO1H8B80e5ykxLZTgkiAXkRs9g3k4JnNaDLZdjDsxTaymSZSsAjozmg+1EK2rBFEVg==');
define('SECURE_AUTH_SALT', 'CpC3lbGWs64JpVSMolj9+WWrw+lHwzUYjimZ8k5jHsyE9/ceGU4ZsEtlWejudwDjBU/cC/atTqGBQs0KGtcsdg==');
define('LOGGED_IN_SALT',   'cmlXfWAsgNAdbMMlkrzkYQYA496SwwXvVKZMu9MSgI7LqgWdpwTOJa9f+QO6z7Z+J2fn0aQk+PjRCBgFspPRUA==');
define('NONCE_SALT',       'SABgCwN2oXwgvwxfMdvpz455T0MEE7kSFAlCOcHNyeOXPbC8jkBY+DbBreDbDaRLCI+C0J2h/1mnwNLZ9Osbjw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

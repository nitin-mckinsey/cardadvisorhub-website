<?php
/**
 * WordPress Configuration File for Card Advisor Hub
 * 
 * IMPORTANT: Fill in your actual database details below
 * You can get these from your Hostinger control panel
 */

// ** Database settings - You need to get these from Hostinger ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'your_database_name_here' );

/** Database username */
define( 'DB_USER', 'your_database_username_here' );

/** Database password */
define( 'DB_PASSWORD', 'your_database_password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress database table prefix.
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 * Change this to true to enable the display of notices during development.
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" comment. */

/**
 * WordPress Site URLs - Update these with your actual domain
 */
define( 'WP_HOME', 'https://cardadvisorhub.com' );
define( 'WP_SITEURL', 'https://cardadvisorhub.com' );

/**
 * Increase memory limit for better performance
 */
define( 'WP_MEMORY_LIMIT', '256M' );

/**
 * Enable file editing from admin (you can disable this later for security)
 */
define( 'DISALLOW_FILE_EDIT', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

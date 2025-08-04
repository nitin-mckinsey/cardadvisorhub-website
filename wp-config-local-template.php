# WordPress Environment Configuration Template
# Copy this to wp-config-local.php for local development

<?php
# Local Development Configuration
# This file should NOT be committed to Git

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );

# Local database settings (if different from production)
# define( 'DB_NAME', 'local_database_name' );
# define( 'DB_USER', 'local_username' );  
# define( 'DB_PASSWORD', 'local_password' );
# define( 'DB_HOST', 'localhost' );

# Disable caching during development
define( 'WP_CACHE', false );

# Force HTTPS if needed
# define( 'FORCE_SSL_ADMIN', true );

# Memory limit for development
ini_set( 'memory_limit', '256M' );

# Show all errors during development
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
ini_set( 'log_errors', 1 );
ini_set( 'error_log', __DIR__ . '/wp-content/debug.log' );

# Local site URL (if different)
# define( 'WP_HOME', 'http://localhost/cardadvisorhub' );
# define( 'WP_SITEURL', 'http://localhost/cardadvisorhub' );
?>

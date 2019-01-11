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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XQdO7SgSJMr7lzRfpWct1gGdGHTybbRgK2lITl4HHHheZLPd89j3hIjZLM6wpPtpn5fZ700/GsghUmJ7xfNXWQ==');
define('SECURE_AUTH_KEY',  'szIouCtM6Kp47WFNUDfOSjbuYDAgZvt/WEVAT8231x3aq0EW6y2DpmlD3JNeXU0WJeuIgd2q3z6blmSwmNvSWw==');
define('LOGGED_IN_KEY',    'dQ0gV0au2r7VHx3hua2SWxr1nRLrg2PwYXrKPclycOO6qyNfLJRxCn8CWMtd+lyAB2bcitBPXtLPsO/6qXYzwA==');
define('NONCE_KEY',        'lLmFtmUbarjd9SpO06IexOiaBELhmeG+L+pTsYcf8suGmOcyn60GBEkxUqLFZDpLBh/ZN6L+J+Bwhl/cxwFynw==');
define('AUTH_SALT',        'Rlhr/MbWVOqXMnDA9kr8rcntqlSfu+l5B8Gq8rhi4r5RdKLxhsDUm+LZzq0kRVacyALu5kxB2iWO4IsIPvwU5w==');
define('SECURE_AUTH_SALT', 'RbjeCE2zk/rNBHfpdO4aVs/Xjth7zuWyICUh4OhsnXmfTvwb/v+y4s78HhAVDUvb1NLjM9h5qpLFFWM97iu4zw==');
define('LOGGED_IN_SALT',   't+MnGQzJVn0jE4uOSqd5YdjR2Wnbd4MWgVbb2XPRe1Fr6NECPMa6dDIgdK/JmQzr3fdK/YL4X8nemk7bdknqfw==');
define('NONCE_SALT',       'K/3iOp9LW9dQe5Az38YOD6nUF0xF7ViBPemCUHgu+TqTQ1/NyWoZCVnywnMyDGY1zFhcFXK5lFC3r0oHVi0CUw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'consulting-site.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

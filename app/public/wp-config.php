<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('AUTH_KEY',         '2Mur45peJMdlU3Lv8nAk2IrU9JtDhdZLJPG7sDbvuqzRpaTL6zkb4hpt54em6TZlV1p7kbIIAjjQAKaYcZCBzg==');
define('SECURE_AUTH_KEY',  'MY04qbkYkM4UJGWsqXcAHlENoUNTgVJMfmO+QDdD5jgqTSJCm5C8TQddE+H4pJUF7dOkt9HD9sf7soDy9Q1aZw==');
define('LOGGED_IN_KEY',    '0NaPANk0vYsKFXVrtgvAqEcI/JFpYWhXhYcCf9YJZFsS1rjmdVrZ429aBv7r7MBVKMnoLPlOhazSxL2SSGYKMA==');
define('NONCE_KEY',        'OqlxAcxDUa/U2ThCQQfvQ+3SAhuXZBTxqyKpf43Oevy/brOGm1zeT1FdffuHDDVzJn+dDghCEkjQJrZGfQthXg==');
define('AUTH_SALT',        'HWyrrfdHWWq8CPnW4LtKK4aEraxhRjUvY0XSySckvrWaFzLmcxO+MboGJIuTxeXcXIjbivliNMJAb4276bQQiA==');
define('SECURE_AUTH_SALT', 'imeMYt04+hbPJFXjjWSlp7QusJR6YX6P27KnlRCmOUvITgUDAzuLDF/Ra3FLs6KNryKqeFexWVLruA5snhMYhQ==');
define('LOGGED_IN_SALT',   'Co1hqkwBbtEdPdzMa1hrbnDYsHkWq6LkO8F/TL7akEA5e6jmNEL4Offm3PWX2Xqz1Wp31xNiq+acd6a+AtKV9g==');
define('NONCE_SALT',       'aI4jjBQ4P+vmpscuMfSOOPPSiYW4LiikyCDQBv4k89xbkexP3CXGrWRZMOc4JfsATChU6lNVtst4iHiKe4IvPw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

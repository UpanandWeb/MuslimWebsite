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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'muslimb4_wp522');

/** MySQL database username */
define('DB_USER', 'muslimb4_wp522');

/** MySQL database password */
define('DB_PASSWORD', '0@t]41pdOS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ughacbvnufciwgtbscbvvr15j6kdaonqj0fudxx7njmgssbuojpchvrctnnbpbsl');
define('SECURE_AUTH_KEY',  'ngpgseebm7n39brytlyrpe7oqntnnfag5b4tcje5noqcqg6djpzqfssxbkhz9fbw');
define('LOGGED_IN_KEY',    '8lbmsl3d2je4lfxren3awycz6dbfdttkjogdoyuvomqhpmtdanf5isx42zoum733');
define('NONCE_KEY',        '3fylgj8otkos0ixmchaee81eoedghqynhvmspcsw1mpsomfqtvqbmoja8kdp0d5g');
define('AUTH_SALT',        'mxrxvtvtyulk4nxkauzrrs80nocuwh7o9wlehqnwsclq8fjleqlattaaayyuvksa');
define('SECURE_AUTH_SALT', 'lafazfpburrtnfrxvuquvdo1clv3xxbbdzjzffce1kgoucmalqd0vti7isjxq6ei');
define('LOGGED_IN_SALT',   'llab9n4xjqa4rvtvqbjx9112isfltqccfrkiydv3aclcxjpmszvprbnnefw7kath');
define('NONCE_SALT',       '4aeumhexnshi5othfvs3vgpk1gfygozmtzoni6ail42z2duoxfvshepuxqgpzpmf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpx6_';

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
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

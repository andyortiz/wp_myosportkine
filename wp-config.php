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
define('DB_NAME', 'u184291988_xujax');

/** MySQL database username */
define('DB_USER', 'u184291988_panyn');

/** MySQL database password */
define('DB_PASSWORD', 'RaLeqyseXy');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'bJ0DFae87WjaB0cNfGnGHKXyk06QLTqy4mEn0548LhHre8XXwxFdM4ouKrc9arKo');
define('SECURE_AUTH_KEY',  'xvhLNsCBtOVNDR1Rbby0puUl2cCSzxs7zebOwp9KlxNcFPS6FfMC2gn8zWStqed8');
define('LOGGED_IN_KEY',    'q90AZuesa5rqUy1cD0JuNZY0xm5STe5f7fXOXeslsV4IDzn5L3MGAshIyE3D1oNG');
define('NONCE_KEY',        'dJD1rb33on304HJoT0hBJTCtH9HJC8LiomDYus4TMX8vN69bUoKtUKpgkWuTczTJ');
define('AUTH_SALT',        '40mw0NzerctB0cnpJSAQS4EFVE2bgACwEUb1J4tbjIE39F2MPK91ehd2HriYTemh');
define('SECURE_AUTH_SALT', 'mubkjYHGHxwDFQfCfgNgohpllfrt6s416AR6nNONVclsbUSwChwbY7OLdZPpTIeM');
define('LOGGED_IN_SALT',   '1zyOQtYRaHT1O0p7LF7nxSuudIlDKzytgpo6wR4GW7EU1OVVwIHRWl4U3IxbF8f2');
define('NONCE_SALT',       'wjAFVrQaoX4fT0f6cXKOsfa5cdG1jogn8vBOShiTNX1yaaQlNPWIkNOovi29u4l1');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nqpm_';

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

<?php

define('WP_CACHE', true); // Added by WP Rocket

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
define('DB_NAME', 'u4187630_wp_cdetp');

/** Database username */
define('DB_USER', 'u4187630_wp_kltyv');

/** Database password */
define('DB_PASSWORD', '03Mv#@0cYJiy^ZNt');

/** Database hostname */
define('DB_HOST', 'localhost:3306');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'U34G6L+sW51X]1M8erAc[0)W;iR~4(l29y*kkkS-L!T*)H6:/9To_6dj8y*bY5K(');
define('SECURE_AUTH_KEY', '(NByev0/KAFtI|!S|C3Oi+JFKl6K09H3]:6n/ty0WcEOIu9J&%l)1IY0v4KW9-@6');
define('LOGGED_IN_KEY', '40Np@*6X3E7FB*nL:h(3ho-6*Hq%rlYm[9EZs9o4SuT#o~)3~X_dxND;FQs)!;SN');
define('NONCE_KEY', ')[8u4eJw2ndo*A2Dg8N7BBq0)5[+@2_b(OdsAcEQfa0V2-86T8o(/F3Sj73m056n');
define('AUTH_SALT', 'N3(E9T](ggy9&9ACKdl/9#bpVyWedezI/]S523:W)V3JynFIU0RzDQ1iEk|Y08+!');
define('SECURE_AUTH_SALT', ')j55VO0H0VhG@%U8#WK4*Iyr37E)R1l:pQ7LF39enL3g03T/pBYX9grfmqAlb|79');
define('LOGGED_IN_SALT', 'F%-O(6Q!)Fq203lnQKfK2&4:88vU&o|lDGd1/3)qAv7&6E;2s171YWs8pUD4[6[G');
define('NONCE_SALT', '735!w4;9@&Mjn%ae6y)BPYK~VXLX&/DevO8Um76OW:+8Z%@0Z4Ry2Vsw4Nx85!9T');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '7z7eO_';

/* Add any custom values between this line and the "stop editing" line. */

// define('WP_ALLOW_MULTISITE', true);
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
if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_MEMORY_LIMIT', '256M');

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'sqladmin');

/** MySQL database password */
define('DB_PASSWORD', 'samplepass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'rW%h`-|S_|*gDGTU<q-bFXNM :s~ ZDj8+8$~BcLgP5]&sED 8/cOG.uj(;fh4l{');
define('SECURE_AUTH_KEY',  'LE{IgqmcsGBabBE~+:#5Jc9+GzuyO2 `:/*Vl`tdZW9jp:Cq8&p>|8_$x+@(a5dP');
define('LOGGED_IN_KEY',    'iL5=N#YTh#!yhag;]nH)ly[QP9x4_y+{h1U]zxyF(1Uj9bJ25|--YYESdPn8iF-V');
define('NONCE_KEY',        'K s3qIu~YfT52M+$`.LEXIarhfXsTJuwEP!-+4->LKTnM$VYnv/&}-nV#h|;H{v2');
define('AUTH_SALT',        'lw-.Ouoz@g5OA.$Mp5zh))/ pJV+6|_(P(D,;e<DkB=>p>%~VB80& u<u/&C++s3');
define('SECURE_AUTH_SALT', '}Lv~y[1zn()MmR=btR$J~3g3P85e;VKDzDEQRF`)1-]ljJ;j!?8v5WBy|9N4m#,y');
define('LOGGED_IN_SALT',   'O<O$C5n6XwfT:,k3-}S-tpV_BpZ*hQ[7]BbN|l+d2U2)l6Q.N#`d`lCc~K`+BA>B');
define('NONCE_SALT',       ',cm~|ar,>oz55|8t&zHFE:+KTB!vBqLp1#^mk@{k/RfiI SD(&ieLPfN#D3oXQlW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define('WP_HOME','http://192.168.33.10/wordpress');
define('WP_SITEURL','http://192.168.33.10/wordpress');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


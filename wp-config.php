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
define('DB_NAME', 'newspaper');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'T;}&kwdbQg#MH}((,{2,$BNGvJQy$J<1#u>h<__ cN]Sbp)~|80 C@#o_.{A@lsl');
define('SECURE_AUTH_KEY',  'iz5q12(1h]hW6h1q:x@@n|PK4?Z!MUOm VYGpdV5W(;=>N>1}AC``8{+vZXN}DQy');
define('LOGGED_IN_KEY',    'XjK8aHW`Y(>`-+40O2rc1[1o+;Pj4U?kx&S>)G|vBj%j/hpizj!_cD8X@Zb(/2 p');
define('NONCE_KEY',        'eRU;A4t03kG[/v,RKf+HCBY5Se+]9d7GN11Eiy%M2e3ua@F]j=hD`zLk=MuLO5`2');
define('AUTH_SALT',        ']QPlrx{/kucK`d|clOM,%Ja,[!Hr3d *=a}M6tl YheaXYvW25cIY|55%^%%Ouc%');
define('SECURE_AUTH_SALT', 'y_RF~9+[J=]T|C7f+E}rKjNOhaIelQQ3L19d{r^_W@W^,e$$y$v! VeovAX>wv+&');
define('LOGGED_IN_SALT',   'L9^Qu,7*AQGlg_8p)LJ!z^ wDm]o=/.#}`:PX4f24V{ 7-z*+NBBAvYrb{T@]Qyh');
define('NONCE_SALT',       'T+0?cYFDo(jQRo^/n{CT$S@^=>Pb~h-XP!jZ_d5ci*eF 6+/4O?A,G]5RQPx2#GD');

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

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

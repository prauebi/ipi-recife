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
define('DB_NAME', 'ipirecife');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':]piGgg=O5b{2)laR9C&-99kht*<{=@zaWV$)6mqA3fYT.t([~L[nyMG0MFM5+@]');
define('SECURE_AUTH_KEY',  'Tmt9?b}Ry3K~<5DE-6lD&m@rE>HC j{2A@|)10~{BtlA<+^=%d)BtvVyKQ.wFhK%');
define('LOGGED_IN_KEY',    'hhoJ-y`89EyMZ 0eUUqgk]=%SRm|^xX57K*V4^0ws[w.e6{?%V:pG6gp0Cd;7MQ ');
define('NONCE_KEY',        'oK1M*,<!Zz,F:4OA4X|=yEA0pq<_X:POG<cSduZ}wI0=:?!j(}}><%Mqml(*l~dH');
define('AUTH_SALT',        '7(oX/5c!*Jx$kB1}k]vtHG51J.a=:b{(|gkq#!f|Oh{kKqvSgA:+UePDl2Z|*9)S');
define('SECURE_AUTH_SALT', 'H<#hIStE6tI3oA;~)wu !;0TqeeWi6vK.w:M,J+OGI|*3xovOwoZ}OVah#kGf|_E');
define('LOGGED_IN_SALT',   'dAgsy|E28g7dk2tD~uGk|U+6cN{Zt_/w@Aahwv&38]$Qx4K?.}1G%Ssx).9>UHJE');
define('NONCE_SALT',       ';A0~ cC*.XiOs5Y>6,.#9Q#c[m&P5?li&;N*}l/I] R1T>zh0cG%{x2Kx3*T260B');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

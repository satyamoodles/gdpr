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
define('DB_NAME', 'gdpr');

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
define('AUTH_KEY',         'RofYp|$38}NDK,M_rHe$BC,[5;C,qhW5SMUGaD5=*)Gf+h >7k;:j|~x&b:Z4w9R');
define('SECURE_AUTH_KEY',  'Hi3!}|exfoq7wI=Qk BS} }Y[DcUS!jx:DFQzlQRL&U|(,rm%GN9=H%+v-Av~#2U');
define('LOGGED_IN_KEY',    't.D_y76;`/]82J^a5=-OePnQ9aHi7z7vN<{^-2TgPRr(nC+yk@ceL;v}>seq#.bv');
define('NONCE_KEY',        'EnY+^z9Zau{sB{$`l.y>UYY<k<X/S5xq0V6Qy.0mvMZe8LFx-w]wN<h@Q[W+u~Vk');
define('AUTH_SALT',        'owRv{h.r,}0Q@/X(sfL7b:XH[^I>5^PA0(nu-+O.EOex2BeB#Cf|@JdDHXOECT(z');
define('SECURE_AUTH_SALT', '#r(s*e+)&[teJ5#N7qpS%8S=)v^+[AuJ$?{g4%OjXnq;P:dHa-FwtxdO1C-xC1#-');
define('LOGGED_IN_SALT',   '[1kPW^468H8Wu|,Siq]G=g7.9@wmCxH[dP+%/a7=GJIfJIX9?:V7/.okM~j[<Fz=');
define('NONCE_SALT',       'W.sDAI1iy{7Gyf;@O l^iwqG2^fc_>{.|dCSIDQ,qf*:j>2q56a&Ef7(5Sj3 K31');

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
define('FS_METHOD', 'direct');
define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'Sharmaji@0414' );

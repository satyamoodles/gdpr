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
define('DB_NAME', 'data_protection');

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
define('AUTH_KEY',         '{91$nSpg1v[#ZUH,>tY3c*lTT#5*aLNQ^1NU}{76l?&p:EU2+7%sNnpy|qu5]nGx');
define('SECURE_AUTH_KEY',  '4Pp9rNt0YO_|)9,BCYTM+L>[-B}ps(lV3Z=+zUt.uG1hddu?u=G`q_p!;NYB7:OX');
define('LOGGED_IN_KEY',    '^LwivhWcSbe(yPX-L~B2H{/rO:N,boxBBf_Q=nj@,M//cp@`?DErkV+gE98|G:X*');
define('NONCE_KEY',        '8KF_EP_~B.MO(3fy~7?bv>@F+q&W88)D5<XbXB*om(LkB$$^?mX92irnWT@x-)FL');
define('AUTH_SALT',        '|#F.5zsDwJ%a,Lna+);]JjH)4,u}}D <zRf>zI]sP[.[6:z6nW<2b60I{mrpA(x<');
define('SECURE_AUTH_SALT', 'lr+0|N5:%}SJt/YkGSo1w`N*lz[h0LnE<q*r.IA54|bX+`kA-eaoV~M4H;8<:L.E');
define('LOGGED_IN_SALT',   'hi_fgbQ+^qyZOH4os?>9kuBc@ME^oAm3ly_`ufU$EFnd?Rx3:b]8i2:><d8$ad^i');
define('NONCE_SALT',       'bdO;&fNie;^_JZnh}kES6Hwo9&z, Y,Xr6jXO9WZnhf-=,yr^CO.|fYSAP*>B]c~');

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

define('FS_METHOD','direct');
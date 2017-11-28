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
define('DB_NAME', 'seatestbase_bdd');

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
define('AUTH_KEY',         'i2xT35!N:KgLE%q,Bf~1Wy(y=2t5D/tI*OiB)eT+v!3F>?#%uNc*;9mlZq*TTZb ');
define('SECURE_AUTH_KEY',  '0VVg4]o40uyZaRf9VKX(Z^z=vKk`{./#Ea-1]`{z5{b|6 swM6& NceZEe>5}@*O');
define('LOGGED_IN_KEY',    't|oiR,<TTcEVx,eMoQpj.Fy3B),EY9NS)Vdk]LhVxm@%D_3.Zs}hhMhC=[wp|C%{');
define('NONCE_KEY',        'E|bM831>Vzadqj1*^x2U1te,#@y,X>[1z+=h3ts3w+xO--ta.xDL1G2?ycLjMI^x');
define('AUTH_SALT',        'z.-8jA`g:|`O05Z+Ga,+T=f$ys^iu/o$s C$X%rGMocZ+.8mYt2LlU^!7];MmLJ?');
define('SECURE_AUTH_SALT', 'Y;:%VDw>T):*M>11R#Fm2AJmr40!mz8i<YXKA`<EQxs&zeud$|Y3Ly$GpYk!gE]z');
define('LOGGED_IN_SALT',   'uG+Ty)gR&2M6`HWapCEW}~!P&_JiE?|. #d0.V3aqCb*<E{MlUD&@B7tA={h7B9`');
define('NONCE_SALT',       'MWquj=Sv<-Pet*,vT@jY7zeT7@) mJhn0R[+F;CWXb`[JGqWiHhTutS!:?g$hea/');

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

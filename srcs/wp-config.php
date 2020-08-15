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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'elovegoo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'alr;(Y:IIIZ3;rTAglXHO2A;YAE!n``aW=n^5j{%e?2qJ<F,;lsX_)D#kRL(]6_6');
define('SECURE_AUTH_KEY',  'kUGg-7aPLH$DNa9DoO%x$|unX-%W)Gq:,vTXEMRly</;IPs-[+]9}Sue@[maHm&g');
define('LOGGED_IN_KEY',    'wN>hN7/ qL?9$[0arU`+mmPn(]p]M/U|e+Cxndy~2+!]B}l3| |KJ)2[@3jgK>< ');
define('NONCE_KEY',        'k|-blV4%]_H;^~C>{^-xekh7u%W2_?2@,67ZB(jxW;N}m;wd[8KpNvH+[TB}Aur0');
define('AUTH_SALT',        'B9vIItAg~U_?>rqsyTg8HA<gcu$*s)k+T+[]S|^+M$KGO/-<kiT(a<6{5WIub@ca');
define('SECURE_AUTH_SALT', 'i0HmRUw6,ng@->w1c>7+QC|n84nI;]jOxbu~^_|>RB.,ZgeUk-ax<;}b&w{9]&O+');
define('LOGGED_IN_SALT',   'vwiDD>VkN/r-v|F{vc>xG8Md6z{K}HQk]+0-tVR{1j_Qn;WVYy9T+mGZ jGcA$Y8');
define('NONCE_SALT',       'f3o+Au6w`w[mj.f% jjZ!&cA3~H1nY>|*|X,O&yIBW}b(++lJ-|B*^FSXHp jX|N');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

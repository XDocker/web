<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'xdocker');

/** MySQL database username */
define('DB_USER', 'xdocker');

/** MySQL database password */
define('DB_PASSWORD', '9ahwQNb0mnnOIKVr');

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
define('AUTH_KEY',         'gbyrq#`>/sP=|DPC1+7:bkSEy[xL4eD6=.bmWwCyiuAg}|B$~,f-lty{mY2uikdB');
define('SECURE_AUTH_KEY',  'Q-YlTs5Aj(;e{Lb9CgAdG}SQy+a:{E!R4L8g-+]lf04=?uKa5#m$|/z4o$;O?:ic');
define('LOGGED_IN_KEY',    '5N0]af`l4|X--=8Q4=~U8Ff73YIXTvr-dk,r8d?Yup-Eg|_k2Y0{4jwnk )R~% x');
define('NONCE_KEY',        ' mtjk$6-B^yxuv^b6X9Vf7Qe>+og;@|D#sG!~<l4ck,{3(/SCY** -{g!p0%4stn');
define('AUTH_SALT',        '[7Od-A23}DVwG]GWks!w[{dK`#+8]WuPx@xf=&7WuR`e!$6p$xn26 Tf_#Y,dD/T');
define('SECURE_AUTH_SALT', 'jk&p-*&+_6Z~9-/|d%%fxkmQ-a`W:B51CvY=&_Qof _^HS8U>]RH%uTXz5$M@yoU');
define('LOGGED_IN_SALT',   '3|mElk~/XjY[K#W-JdNk?RQhbdM+3Gu;WO43tiYB$mm:S< (x@n+Z%yTB[:c;+&2');
define('NONCE_SALT',       '3 cuR.M7E;8_vS8_:#?mE |Dy|(M88@h++;MGd1.xZ] =r3c:&EsD/MJi$Oa.]kO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

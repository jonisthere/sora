<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cl21-sora');

/** MySQL database username */
define('DB_USER', 'cl21-sora');

/** MySQL database password */
define('DB_PASSWORD', 'CsetC^j2-');

/** MySQL hostname */
define('DB_HOST', '79.170.40.233');

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
define('AUTH_KEY',         'z -dKXSQd} >#})Y|pk}+%C$R>v>p;^xHrW,v#|3$o%5M=khCU%[8*9,vh=wi(fn');
define('SECURE_AUTH_KEY',  't=/9{TP nzc0%-7W}Yt5h.F~<nBAXI y-^aY%OA7LXc@w9I)5)_Tvlpksu>,44+D');
define('LOGGED_IN_KEY',    'bcWq1A}M8M1GAplVhV8L&B.KV;zamyKv*=[nIJ{4yj,dcL@[6[WJ*)[8Gh2|4#SH');
define('NONCE_KEY',        'Vz@(rVh%zJT0W|F>k7l8{eMKfx)}J=c|W?mn`cP.ic~rPgN5dbKRGv^n,IU#QhWj');
define('AUTH_SALT',        'W0+zk9VJ9dD<nDhEJGXmuS&UKX2s;^yLV0i!:jp6(.39X0uUpnpDuM8#OFsa(<#N');
define('SECURE_AUTH_SALT', 'Z}zK-+ $~<;D5*/+HDMDGsON[tlTOS ?ZH`v)T.x~M*c|wYOMXP!5G}88_J=a|AK');
define('LOGGED_IN_SALT',   '/=u|xO^M[KBL(vx8Xk_U@DB<xWcRS1]!Yiy!K8?-[P_D~vDZ39A]x&AjD?&/SCpH');
define('NONCE_SALT',       'A%^nP|G-Lv;F-*%u%2Y$4a`+~meE-9}v*u=5xDmUL^unH9.9uzLv-C@C+^xPNJqQ');

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

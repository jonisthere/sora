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
define('DB_NAME', 'sora');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'K8hFq2wv');

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
define('AUTH_KEY',         '-X~$,(aZfF52_]G8^f8fD~QmE*X{!<YJAd<SDQD_fnJsMiHP9NGE@|=MmJ/(lL(>');
define('SECURE_AUTH_KEY',  'wa:~I~7;2`ucbNA!Z2]aG3wOmBEPboB5Rip^w$Yf9`c7B8bh~5ISSr<73/>W[3t ');
define('LOGGED_IN_KEY',    'Kq9;1OYZ`vRlhR#!>2_h{1mta1*YPJmaXF(X%vY:OU1[@h[K,]v(|%=PxR5$M[E ');
define('NONCE_KEY',        '$A9^W`bzoSsqLb}c_%JmE>+Nt|T}A(3XwlS{X/,^ijJ-Y1+?Jxs9,dQEoTjX!A*|');
define('AUTH_SALT',        'PE6$o9Li;<Y{1at8GjY,^.2kItM) WRB(k)G^Lt~uXZ)7CEBt%ELm)]qpBF=Y{.A');
define('SECURE_AUTH_SALT', 'rUjo8k n5 .FE@ot= dk-{JO_ [`* y1NFKr&@LD ^-d3Ls{W+G(X&]eFkYN|W.m');
define('LOGGED_IN_SALT',   'ndr_[OZH40Sd0$BQlmFZL::ne!8xrdI9)dNqo1G6/ n7-h6GPu~FPo`^m/dg1;#x');
define('NONCE_SALT',       'b$%WL29Di+Kd$c!Z*_.d|Q=0i8bOI)93]qKSA{Ae|weqd^$IpMO~+x=D|DN!UQXJ');

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

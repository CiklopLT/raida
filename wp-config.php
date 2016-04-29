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
define('DB_NAME', 'raida');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'MyYYYPass4!');

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
define('AUTH_KEY',         'c3W,o{s`k?)-a-=D]:+oUx2FyViK*{Xef|# IIE)f>1p`Jq<|y[0SvW+]N+;K7I2');
define('SECURE_AUTH_KEY',  'aoaU:o>,N-.>y2U{[Hx@w0FbS@,jf-Xm;+!Icy-M%Q:.b)d;Em<2^%Uy#b/eUz4B');
define('LOGGED_IN_KEY',    'rReZ|X=U203sR0yU6`RySu9hQ+;C>/#Ycg[ks9%2Gnut.Fvb!6,t,16f|6%[FY7o');
define('NONCE_KEY',        '*V.Lw$}<|ctqU^Tk3Ed_3H|b S=fm%|{z[v>U!Z9p@2f6W2:dY]nu#:lgPqNQ6Ue');
define('AUTH_SALT',        ' Xjt KYlV  K^or:-xq%^mEI1&>z9|bcvgs;}8wFB7^ e{hD(wJjd#|g:z?$-8:I');
define('SECURE_AUTH_SALT', 'K!dM&YqQ2tavS,fU|e${I)74@M1wu6}c9L6W5vA>-F{ <68V%Cr$?Kx#ZavzrJ0Y');
define('LOGGED_IN_SALT',   'udPuoh{7g}I/}p2iRXWMX+1{u]Au44f8INn^ZXe n|y]9$ItGS|S;`<8:p`m,FlT');
define('NONCE_SALT',       '8Iq_r_wWgP{$I;.Mq%F-a?XiQ255iNnhKC]J{]a[%O{9:JzmYs_48(!S,IboOG}^');

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

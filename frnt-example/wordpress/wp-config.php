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
define('DB_NAME', 'wp-frnt-example');

/** MySQL database username */
define('DB_USER', 'yyy');

/** MySQL database password */
define('DB_PASSWORD', 'zzz');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'PwlTQ=Ke^Tkn+qDL8|+}a3~I-h1tVySEyHZ#j3n+BAvquCR#vOx%1mAnA{w-[*D<');
define('SECURE_AUTH_KEY',  'C/L!}}tW/_@0-.X:CWjc$Cf!0)of}YVHE( 9x.?CiIL@[]2P)9EY5VGHlMbWN758');
define('LOGGED_IN_KEY',    'Ez|MAF&)}3+1Uqr9jh;g,zdFX,c~?PU-l=cT;o+fL~s _.g1$Q3:+%ezBr-C%.wQ');
define('NONCE_KEY',        'eO#Y&)^|a>:|:GmaZ}!MR09G6Zdw j`oTtp.A}c|efPz#FRtW4ezq<J8 8=h+ojA');
define('AUTH_SALT',        'Y=9i8K5*zOg4e4glRwx1Bd66vUS|[Vv{nf<imWo`Q$FJ`dcpn>)]3dfL-4F]j/[z');
define('SECURE_AUTH_SALT', 'tr:d## c)9_E=Abq6qFf+I%MCl.,57JqiYT`n+>CMH~uh><t@So#bMzj;BM){;^6');
define('LOGGED_IN_SALT',   '|hE=qI2XWmR+f7EEESibTCD[dXn>, FDk)*8>dJ.W[|u`k*0QoO(0u<f_A.xBnCU');
define('NONCE_SALT',       'zPV>,OaH<Y6s-h>}&:3RO`j6ZF7aBa##66+dr)kyPRv()$wLL^f*630-@HK( H6P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

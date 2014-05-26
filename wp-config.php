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
define('DB_NAME', 'exceptfa_rmworkers');


/** MySQL database username */
define('DB_USER', 'exceptfa_user');


/** MySQL database password */
define('DB_PASSWORD', 'Brat@1124Not');


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
define('AUTH_KEY',         'Ff24$ij9&;SZbODzegYZ8$H@#:5=<_}/CIHqNA5r9Q};;FDn+v,r +UP!9kD+_YJ');

define('SECURE_AUTH_KEY',  '[7t;wATo-`@>&;aQ0!+i+licX>qX~y?-w%G?i1ZL,O-pkWk`}Jf `d}$|W()PuSH');

define('LOGGED_IN_KEY',    '>tW$J@eJVkQ+&<xxstal>#|lOA|.+a^Pe}^Zl<|I@*k76{s-YTC1Ph%&Cec~36[;');

define('NONCE_KEY',        'LxQ{ D55n|{5X -4+;bKm[$K-Z@MNM+-t213biC1WYqc!V~*q/N_s[4|qU 2ym)S');

define('AUTH_SALT',        '|OKp.=~Z;fBU-TiIp2tVk@Q-}ZTWqRCd;npy75^El*}:+0X+*V0Q:ja$fVw),[y<');

define('SECURE_AUTH_SALT', '82uYPpL/Wc+/>v{6^M #PwKaHR?dF(|-jIa|r#.VA2_X=|kOZ Hve}Ae3$?Bn:l%');

define('LOGGED_IN_SALT',   'c6QvwxeEP?@BZXLYeW^1=d-;-5uZ`^~UVql?_+<_E{/AT,|/Vd-;a(~rIYh`cFGP');

define('NONCE_SALT',       'h%RGj.yKvNtpiug9Q{yh{YT-mED=q-|*+BOU~~I+N/Q%jiDm:G>2_*(=F_6=xlY3');


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

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
define('DB_NAME', 'wordpress_first');

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
define('AUTH_KEY',         '>sOK<DC 4]aqQ:fRi$>2P<??[,U!j7CTqD<&^0KTfP?AlE%Ma>>]9ZB(TmVT_mwq');
define('SECURE_AUTH_KEY',  'Q z_ q4{1rl(fzt?LY3;CyIeuBL%{wE&/k3*=aeZ@,],+8uN=3_rUKKG!.:B$CQJ');
define('LOGGED_IN_KEY',    'aL^.=,?MdH_v+Q>YM6S{pXkv(>fa6/TZ&H=3V3m4rU~*4`f[;L#1/zmv9[7$`gPx');
define('NONCE_KEY',        '.A^V5T[@?=Gb62$6zNl6.VX 5^bAH`*8HVMEaoU>uR7Y43#Hx!D_3i}+it^qTOWp');
define('AUTH_SALT',        '%D&*g;>:^BLj}v:qcMVmOxHIG#t_f7<Y RHnCOV.Br_C:KihY(<|i=k>?Gso]Az[');
define('SECURE_AUTH_SALT', 'F&3}LpT>g|6alB|~fd,?c@8p]kg1Ax}b_($SVz6y~%GwMpB e:bs^#_,,HM5BKft');
define('LOGGED_IN_SALT',   'O]py}W,+/dU=6M[7y(})~&hQ;#iI0q{-jXWg; o*yx:UlN )?0IAYv $HO2zS![w');
define('NONCE_SALT',       '3-TFxC2gl}]iGl#|?Z? _`g6#/?vt:;|FmY81C1):`oB$cr2{=+_R)]0(*SvtO~g');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

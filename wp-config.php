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
define('DB_NAME', 'wp');

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

define( 'WPLANG', 'vi' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pwGE@77`wS[f-CV=WBI2ro>7p|TDv-@+!ggk+}yN>* .>cDj,;TH9E038L8`&5PI');
define('SECURE_AUTH_KEY',  'YmFhj<@b}O$e#J@9+zDrIs$fb78*SLvM6-1FL^u?+$,$37-:gGFLrA#|q,w@db_R');
define('LOGGED_IN_KEY',    '.F%Pb 15t3sn8n<sE]PLkg7.7!J({wFeo7ft&qT+09e|1}R_TP|e6AWCi<h75!_P');
define('NONCE_KEY',        'z2>r+CFlZBZ(f1&:}HEgp,)ABiN<9$-!x&m0#g(SCRGGDa%Z=6|drIt*h0qI%26n');
define('AUTH_SALT',        'IeMJPRDhnkVu$_:fJGu-v]>Ym}};R)?lBSf}+Y>;]JLBy8i0!$jdLHBUVE}hK/<f');
define('SECURE_AUTH_SALT', 'Z@qu{-IE?pQg:57GA$tRqCDx5|pRXR+9Ea|!dKf2g4@5[g#b*AN,svdnLv@zK6U(');
define('LOGGED_IN_SALT',   '66q/u+F~{HsZVD{|cP]V5e)A=Z}d;Wmp7--:`fW0RG3ae+_GVpGL+Q*x>p5Tdz$M');
define('NONCE_SALT',       ' g^1)u,nh)&s~7;1=2YuT:{8IQ,[NVpmm@g4St1 (a+1=^y{~G9-$+0r+BJd$Xd?');

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
	


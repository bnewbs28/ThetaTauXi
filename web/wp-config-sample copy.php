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
define('DB_NAME', 'theta_tau_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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

 define('AUTH_KEY',         '${o3W~%>v6hMyT<LCtaAQ-.k{|)?#!+} gFkexe yNC<~6f!DCq-?XRzdhN0vebG');
 define('SECURE_AUTH_KEY',  'IScOei?n[#|0H*jatD:Yp<?im+0o!w:lx1JRoxSEj(;W>W9aQPRgiQW+|Y?#P6_a');
 define('LOGGED_IN_KEY',    '?H)+n9x0!pNsdyMw>)q*!gh [WK2p]L$:-?42q>N-p!w%t|>MKjf0K|`V0B1@^DS');
 define('NONCE_KEY',        'zhs{.-a7~m[{^<n]4~:q>U7<`6sb!}R~6xjb SDU^7?2qv:CKh^j%h68gY;$y6GF');
 define('AUTH_SALT',        'Vqj<cf<-DY:SNTM|Gt]&|+%`+5jO&jM+:lY# i`nMxohxp3l-V-e6-)>KcpHOr#C');
 define('SECURE_AUTH_SALT', 'Dn!Fb#?01yT}&0X(m] 7YOyko6WA}]R.|$ZzDQE#q?P.DidSw|V|9,RDo2a2TP7o');
 define('LOGGED_IN_SALT',   'U$F--qPG+9;lY?~WCi1SNm<ME$tE?wac(2PE+{#fiDI!2.^`g-c%vR/%R|C#_HK%');
 define('NONCE_SALT',       'ztB ; Vi&k*U!,HkyDFLn.!}P_1<|f?2$H3i}ffZ2Phk9q:sW k9s{b0=~SaI7[G');

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

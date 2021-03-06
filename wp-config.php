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
define('DB_NAME', 'devtools');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$0I$SLOA nHKs|v,#=uRh]E~[i8;u7y|iU;_~[Eu70:3k.2v+26wx;91`r#EJg/d');
define('SECURE_AUTH_KEY',  '-cjq/udP5ADWD+s ;z+^.mcd!-w9D08=VjhAk;UW:8sl0IemG|X|Z&{~m9A_XF{F');
define('LOGGED_IN_KEY',    '[w+@k%G;0GxJv(piv)8KPZ%S3_)t&at:w$4eR!1Mb?+{:q79?*56_Z6U|2-M4UF|');
define('NONCE_KEY',        'u?iCCf2+tf[}(XDHTh(BKZbu_]6Y3e7w1dt#3Od[uxLqkB4a/)*rieXwpF+7!9V9');
define('AUTH_SALT',        'k|ys-U8O(b8yC^1+^Nts</0C0%BPLQb{4xM8Q(tle%lO+B`@O3$r]:!ru|-aINs?');
define('SECURE_AUTH_SALT', 'n$vvBnJ`AWZ&4@O$-*#&QrUhfj5?c#fGEI&X/%d5GHVtG.(l*Hq^AR&)8g1Z[+`R');
define('LOGGED_IN_SALT',   'P;L}*Gt+riepy4%tKZo=q{^Dv]eJKeA1$F2b._3qY~|8#[vmG9oGxBE~]KJf(o5{');
define('NONCE_SALT',       'rbA]}dRdg)VU<qAand^U-E3eR4B/P>nl~VQVp9xrQ/k#ECK/PLErH<i]tWy~D(W0');

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

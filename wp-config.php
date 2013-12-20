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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tech');

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
define('AUTH_KEY',         'Tep=YR_XcdzFX.D-KN%Ii:>:k>&22P+bJFsaf /mJp#iZqG67pBj+]I|_|a&x612');
define('SECURE_AUTH_KEY',  '5G;D~l+onZ+XhL  eTQ4BFJMe5]`o`ZTdA=ZbgpRukD ($rvx~S8u9Q*AF.8L@OU');
define('LOGGED_IN_KEY',    'ki63`H.56Eeq(BZ@:@:)n-lQ.[EM[`i!$931?`/IYLx[t[#qp58k6B!n5ErU_uE+');
define('NONCE_KEY',        '8JBk^dV$to.|7T<0i1|6K<D2r1%oF>v_t c.rk-65LO%Nn?q+rRSfS.fwDWCH:Hg');
define('AUTH_SALT',        'aITnLRssp72GK>)wfiWx?RJMe+ViD7&?gH+^Jkhrp&_`fxec:-k3}/@eI+|-7{[ ');
define('SECURE_AUTH_SALT', 'n$o5R.4Lb?oyfJ+Vk`6I(~Q#~rP-l$/[UaXyvE|y`Z|P*k+OP~I_3Ce1p}||3fu5');
define('LOGGED_IN_SALT',   'V1GHik$ORiQuv)qE^da0.4U@}7&U#>()~P[^dn<}X.~#,6^IQ+&PV8~n)sBh3#r?');
define('NONCE_SALT',       '+7Lm]h9}*F/3HoA<oT`my?Fl;S=K2V%@bqO+N-B%Cjg8*<J+LPx}Rn}qR^XHo+;w');

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

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
define('DB_NAME', 'simplewp');

/** MySQL database username */
define('DB_USER', 'simplewp');

/** MySQL database password */
define('DB_PASSWORD', 'simplewp');

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
define('AUTH_KEY',         'G0.e42EN*#|V2-4*Ux.su[9> H % MO*L=)Fhk`|Ic9S&n-FYmeva;<6E$*ukh4d');
define('SECURE_AUTH_KEY',  '_pG;,=59d]}.WM86w/.)`vk{by1S<f~#ALRtg#YlDx`MsEo<eNa3x-w;1zX{Gw>p');
define('LOGGED_IN_KEY',    '@8eoU[GrHHxn@dhgnJE|ABr[Hx-{0VdXW}7K74y0`&bhI{7-qeFO)pX,YV%cj;Nl');
define('NONCE_KEY',        ',u)}+)/Vw`EC^VbkW?+(.{ !NwQI-{;!4}>D&oG2Y5-JR1gR|}x|DOMMiDlds~ P');
define('AUTH_SALT',        ': C;<p-:()n&i!4oWld0Xx-K*@F(r8Kpz%9z<{fk[{Sh|WhFBq%]6mm`}gQ7shO=');
define('SECURE_AUTH_SALT', '*X;PI M+$-%[7cbi}yR)}@KS^Pz)yWF}:f.Pd=D~9QcuBt^O[:0:wL+ @z9)&<s.');
define('LOGGED_IN_SALT',   'vtB CWd9z}R&5Z!0bi|++TPKbW&X]7y.1_Er,4|NCR~o$-rOPM%+@GxT}wn(XcSI');
define('NONCE_SALT',       'a|OIfV<CBQp1-|)5ekO$62f s}Mi9cfk|G>LLlCgjcWVxun +DIp@A&EHL&@nP[%');

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


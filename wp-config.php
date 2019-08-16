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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/aarfre6/speakeasycomedy.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'speakeasycomedy_com');

/** MySQL database username */
define('DB_USER', 'speakeasycomedyc');

/** MySQL database password */
define('DB_PASSWORD', 'KsULh^-x');

/** MySQL hostname */
define('DB_HOST', 'mysql.speakeasycomedy.com');

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
define('AUTH_KEY',         '`vsi&+e1v)|!a/c:e_9!+|Z/i@x2RKJ!!S!EChL9_eu)$WqzWIalD"k?YQKwEKJ2');
define('SECURE_AUTH_KEY',  'z!oaEySBbxW0Y$K!LS@xpSF6OC7xTc1jvU_eO+vdAxia*UAWZGo_3kL&k~3MFCf%');
define('LOGGED_IN_KEY',    'eR%LCnI07~LgAhlGDWgQZVUbiqc(L+9K1KgUioCE&|bx?1Sb0*VnMUt("xrFe"Wq');
define('NONCE_KEY',        'Ii&GIo^TeaW39h_Dk8v4_OC?rcd"#CV+zUtfkS2|kEhQF9E:T@(f4pnEr9T4y%CA');
define('AUTH_SALT',        '85fa;5#n`&oew*_huBzXu#)c&tCbw$mz0oxbs7Cm#^SGbeVU5/55n9yVy5#""YOC');
define('SECURE_AUTH_SALT', 'f*^7hR$+/3+_OrK6|xfBvP5"?rC*3$7e2%~RtP!U9_vjXFXSTDeyRKK/5sy:_wZD');
define('LOGGED_IN_SALT',   '0r#nQ7H;ITY#L%M%5BBZ9~P~A)rSyu(urt*wQ^;(P_d^E8::NLs)&N^ovoO_WNl(');
define('NONCE_SALT',       'E_za*H+YAbZ^&q4LNbrPCApr:#*56TG0jQ`/GW:Z@/?`U62RzSqyRi6uT531;q;Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_i9z4dc_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


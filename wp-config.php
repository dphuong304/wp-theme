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
define('DB_NAME', 'wp-theme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Ap!7S0VJn#$yti<u0iS_5Kdob!lKbRvt(BeAh4SX9f0dur{bY)8|Qh+(7yvUH|wZ');
define('SECURE_AUTH_KEY',  'v^Su$[FDu7l,>O(]/tA!1G-^N-L~bDoAMZpBPcVsWGJ>!PBr?_xdJ1>H[=Dkx^I0');
define('LOGGED_IN_KEY',    '>d8t:<mQ0Mv@e54(|HpV7{4@+>#KGZhy[T^>}+D3+2&vwDDTksLhz5EF@/RNKbR?');
define('NONCE_KEY',        '_l+#x0<;0~P_Y8iHW[.{(aNV7~rVwgeFqpU+XH:-(X>ln9_Ij6HmR|pU}XR-|_io');
define('AUTH_SALT',        ']5YR/y K%QeA4wF@EWql[@OI7O=4;[6Jn2Sp=<<Hy-vFO3|S.*8/ fS%S<Jn7k[(');
define('SECURE_AUTH_SALT', '@J46YW*l|[PP<tiUa]en`a>D|_`y0VrN(-LC9}|l66rv{7eDP1aIicKsB7g+G~I!');
define('LOGGED_IN_SALT',   'fx1$iJG+ASnJ>4yCa=}f KE[UpUL3Opi@O+JF0O<kU@7~l%(.w`j)SP2ME:b9IIy');
define('NONCE_SALT',       'v(E%Jr)L*+V4iN[6Ci6NFbLSL]}yP#USzdBeB9g$/-NAMaCMUMVGQ++,<L{dh:dL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

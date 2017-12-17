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
define('DB_NAME', 'mylauncher');

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
define('AUTH_KEY',         'lhg>MsG&*Ej:n8@qj$AM.sWlHXpNe_g@FLAf0,+rFl2E<8)Mck@J@yY@;v$ZETsA');
define('SECURE_AUTH_KEY',  'c!4CXz01<&07upDOGpEjP&KB*N!_ ;/8hF!=[8{]FuW4ghIgW7]P(@9> CA/lJLb');
define('LOGGED_IN_KEY',    'I,B6b;tLH1O*IWH4Is*Vw^ln7=Lw|rFXxp {g=neKfGwFNV_Q^lRuIHujoD2,?n]');
define('NONCE_KEY',        '>.i-7KzwBG`9ODp2/#-U9~^V)XbN|^HH5{L6-p[,3gi|*EkQT6L~LaKH@=|vcz< ');
define('AUTH_SALT',        '{D-F,K[KpA/7IrXj{,/lm nh|M]>(n:lK_{E#,@pNF!N`j-xqQ?{<m5qvP--{peY');
define('SECURE_AUTH_SALT', 'RIMag|4_M#NnuMx-H(eISFe]Z_F./luY1(@,MKo5;XZkSzJ36hTbCJXy}FX7mmKR');
define('LOGGED_IN_SALT',   'X_o!2zRb`=-2#z(jGMXS0WINe]&[Oc:-b_jIdYQI`LaZXA6Y(YTonNUj{kF@u?w8');
define('NONCE_SALT',       'rmU]t,AUmfMWkp2F&(&2C;xVR*_)nbE]mJnjiQj2W.4eR^y_m~0Y74?6`)9IvWwe');

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

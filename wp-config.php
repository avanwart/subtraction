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
define('DB_NAME', 'andywart_subtraction');

/** MySQL database username */
define('DB_USER', 'andywart_sc');

/** MySQL database password */
define('DB_PASSWORD', 'Subtract123');

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
define('AUTH_KEY',         '`m~]PR9ZK_[R3 3[g)8V!&6+*2<}*-m8SNh2|bmc~Vy#f-w-KCwz8Tt`RMB6QE;F');
define('SECURE_AUTH_KEY',  '$~`zNnUCzDlfQJc?MmK$iE[$M@]}>#cz-<Y@)&yHPKaa:]bbAPC3ARP8#($7d7%y');
define('LOGGED_IN_KEY',    'Ez|&:A]|1zhhiOABd.J210`@}TZd :.xI/xj>*+$s~H+T3S]v}B_kgFYagw1|^3c');
define('NONCE_KEY',        '<)y2,SJ{]5U.W10w7;@CFZ~T-T{qlmWqP3gsaV(J;o`07aDHoI,I0;]s:ii_ku=J');
define('AUTH_SALT',        '|wuZ0JlM(QkQROm&o0yCr{!g`5U?JP fRPHebbRdFj?DHD1X.DR#eTb~&M})3#iW');
define('SECURE_AUTH_SALT', '66kJ5Y,3x/ %A N{0:lGL=(T56P[w*SH@?ZIcQ-IxZll1I-c3)jpm?#i$3qKbJJE');
define('LOGGED_IN_SALT',   '~QC|H|qY#Qy$M9^#X3TJv4dLg=KS| COR/g4Ac^4wO?rr,/D+70_z!1j3=/l+*u`');
define('NONCE_SALT',       'M>N&vg*t_h:-K_-8;C-KQ5A+)mCjyabaPvKkg{1khB0+g7o?kuM&Dr1R]Yl]ox+|');

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

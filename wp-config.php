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
define('DB_NAME', 'medicit');

/** MySQL database username */
define('DB_USER', 'medicit');

/** MySQL database password */
define('DB_PASSWORD', 'rahsite');

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
define('AUTH_KEY',         '^{+;eZZ![+0duJ_9^-`t|v:gu7c74; !J1Gzw<KPgw?|Mp[_0l#V. WtX454Q$|$');
define('SECURE_AUTH_KEY',  'Ip;!f?Fnj=<(5dm*@twaJB_)&yR]-y8U751U`HdTT#w(r2W;>;NdHFPx%.Lgkdsa');
define('LOGGED_IN_KEY',    'Bf{tY}FjDt3+M+hookgw(]cn+-]<6M9)zZs {@DyG%W<w5_)vDtPFcziM^q3m<bY');
define('NONCE_KEY',        '~XChikk|+6lJ^R)4 CQqx4p(DVSTXK0*xP<q9Qnu(chM 4G3k;j2zV25]W[_M`k|');
define('AUTH_SALT',        'g~i:3H(0E98siyRa#8jo~&q|I+{F8f{HgFv4P/~-$^]qRjyQ`FN+`po[Owka_,l*');
define('SECURE_AUTH_SALT', 'N$sgr,TJ-jWD6-@Vp}w8+!B}LJ(3Pf`EngdwNMrhw@*zohI CT4B3RX<mtFPJ@72');
define('LOGGED_IN_SALT',   'zuqi-r<]}pSwQD2ci>+eb%!-8}y#8ZZ|os&L%dhlJZ}uT;S)`GeGH21c?:zJ#cQ)');
define('NONCE_SALT',       '^N,LCLd!xYT$,$sj_euh6`>0?|?Rj|/Iwj<g||ZBe*t,J6!^}Yrng64Vi9)^z+^-');

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

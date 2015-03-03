<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chemshop');

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
define('AUTH_KEY',         'YRq<3~> |UupdsBQFkUBI9$PGK)VY)95 &8]1R)8-w.L|8Pwe8.vMwo@|U3nRk+:');
define('SECURE_AUTH_KEY',  '+7U!OoF)Ny9|-M!}sZ_,18uVah O (c~NXi}ADdutKEbbqR=}4JL=_qvR+~OY-OS');
define('LOGGED_IN_KEY',    'nhFRcU3/PJFDIcCDYf(WQ]:]n!]URg {cpcG4O3bN|RCQ%rosI,=OO<|hq,)%Y),');
define('NONCE_KEY',        'lyc*Yp#Qa&z%U-18(._V:.f-|cX=)}wKY4>%V*S_ul#I7/<k~]o]m#6vQa?+^OHs');
define('AUTH_SALT',        'w/+t-M*|xyU~*{y}l4Lvm+T7d$=h{z}2A _b4EL?cIwq(!]^Lh94b!g#&kS}@+;z');
define('SECURE_AUTH_SALT', 'u#|NP<|D,&,g|/oG&^+ /xm-M%deO#8DfaBI1#cn|%,<~g-PWy#1kTSOLh(=_C/|');
define('LOGGED_IN_SALT',   ':tN$+sz.?+fl#H =w^qjXB|,Z&Quy$b|LC.mf-[s]V{D.fr(zZYbO18C%qs+@RAP');
define('NONCE_SALT',       'LKzd5cRkjA?+4Ch]l{iP*-j2|3hEx1IcY?Gkva+HGh}]*bmL(d)/siX`oAN^rxDJ');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

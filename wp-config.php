<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'Narnewordpress');

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
define('AUTH_KEY',         'VSrl8KVM&**ffqB.)V1@>J,^DNBTR/qnY<vVjc1GRBUHaYe1T;CA1/t1|9BuGwm^');
define('SECURE_AUTH_KEY',  'FeaiHnc%J/&Kj4%z0E4N>:9ina=Vc11YupG=`gV`jT7$2/kOM#-XuH=?Z8*xD[,(');
define('LOGGED_IN_KEY',    '`Akr}9upi<Sb9iItdF[,h[eu].=T*M,G+t~0<>n:$(SPVX$yaYD}hkN@I2Kbs^aZ');
define('NONCE_KEY',        'x< *^8uf45p sjO`n}YD %}{}e}CA6p)qo*`GZ>4H2VM3{q2nO:qR&Br^|Gy]R5r');
define('AUTH_SALT',        '`ne$`o<C2?_]?!lJ(|U$;_G=FUWQITn*s*[2d6_J8#z%9z.o{/do!8X3bQLl13pY');
define('SECURE_AUTH_SALT', 'yozSQFN)DsKn.9H0DM>2DU9iflh1naE3dx3B?ZK+9TJ6v$*&(Y}B4**;MAaLj-]j');
define('LOGGED_IN_SALT',   'N&#!w^9% xb>o^ #pXZ&;SsV(V}A5#W(Z;-#AqfF.4{X q9d.a.OaRhAEvQ6TCbz');
define('NONCE_SALT',       'ZEcTvh!Qwr3!GX48(F0qo8rnb[l4eOC%2(lB/jaDA9oe|8fuoG`Z3,QTmos[mN8q');

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

<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'growcf');

/** MySQL database username */
define('DB_USER', 'gcf_dbo');

/** MySQL database password */
define('DB_PASSWORD', 'ij93!j8@NX#oldkL');

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
define('AUTH_KEY',         'ACdv(VJ0<T^yGC-,S2O6W_?zHL rJzWYR-E[w|g[|_ji58~L c5!<7fu_$6lCB@^');
define('SECURE_AUTH_KEY',  'K1;Nq^iz{-V)d&=0<-aHAm*:`VjB<k?xyX@5&v|qhNEV,p!<Ek+vY;7S-KcS-A+3');
define('LOGGED_IN_KEY',    '|W3>z=%*^FO{FUq<PBC6.;mL/$RG7T4gyrG-U.gkzM#iCB;otFu+;@Fgg:@r gG4');
define('NONCE_KEY',        ' +lJWn45@FltLQQXLj<!P:/asIa@XL+&~DVWV4OePU$^d&<|7SE(!l}PJhO1;Mvo');
define('AUTH_SALT',        '</!F_X3},U>;FoV/9&qi&}}nlpyU,AoWiy4[Kr8q_.g?/`GpV&@5:-)kB|?5sR<N');
define('SECURE_AUTH_SALT', '|sf+-gSaLv2?c0{&+k{y|I*o+OMSDEfUM]IB6 O3+|^+<S?=vVIXX-R4 RT<>6)A');
define('LOGGED_IN_SALT',   '`.!4&dpqia,]{M/9JU_YJfuEp3k~dZT2UD;1+U?+y+gEf*:S+Q~Y>NxRbMA3 hdx');
define('NONCE_SALT',       'q9pbZ.|{f].Z-)`;M8nOJou/[.uW7;O2l(}:`k->m2+AssX<]IJ.-3:00`z=A/c[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ewo_';

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

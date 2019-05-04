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
define('DB_NAME', 'allameri_db');

/** MySQL database username */
define('DB_USER', 'allameri_user');

/** MySQL database password */
define('DB_PASSWORD', 'fU63ampuK3Ki');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Z#,OH.W)c>qWdtj4#W[SOh#pQyKiCXjD3>lpTY|Oqh3/y^ZE-)MNpBNjs6FVpfcS');
define('SECURE_AUTH_KEY',  'z2L?5oYYZNp8@u~pozhW0eAeVWk8B-sq;Cz*y9QV|mK9G^-OAe-Ma*BUB +d-l&:');
define('LOGGED_IN_KEY',    '_/W10^2}p8j<Mh|?(yTm$jXa0t2l`0hc(A1a*!t(vA6rS*}(eE29X|d`PZ!$iLr~');
define('NONCE_KEY',        '$Cor`Jy[sfE(-{fGod3jTphYrvHd/e7,S1!lV&~R3`*uS>.{{D?CAi.NJyCIY6-J');
define('AUTH_SALT',        '&!CXPxZ#H0Xh~h[6t*Br8 .5bZPI~;6ZsC>M;T:EOy221EPHW/8U?,u}!{^((RL~');
define('SECURE_AUTH_SALT', 'l+vCUF|EebY:]eaN{iZ$PUi#4kB$QuGka{<l:|P|t]U7>JlLD>o+@qktT~f<uW0O');
define('LOGGED_IN_SALT',   '{b7bCHz)&^j6E>)dn*,U.D9j9Ua9q8se@dS!_iIfcYl0d}dn(RK[{RR;x%Cr9=9|');
define('NONCE_SALT',       'J$A0d5FixOWnM0Tm%`//U@E{}#Edi@9o33e/ E77N*nxp2D{e2fQMXI|Q8+ER=~P');

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

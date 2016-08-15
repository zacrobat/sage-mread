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
define('DB_NAME', 'markread');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'telemercure7');

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
define('AUTH_KEY',         'C~btE@&ah[w}:tW*B19A:r:rt*Y7lVhh>ar_iuGHpp21xpNZqb~z+7fO<uZ=IL<N');
define('SECURE_AUTH_KEY',  'Mko4_?J&/t?~^XS@l?zuM6e[Mh*f$htdyLUi$>,h>;T2Jo2R]hx3(3|6J9vb:e-E');
define('LOGGED_IN_KEY',    '!kAb$7;-&cFqYU.y*O8X~AG&[yT=nXkw~Gg~L *pJ1omCb~o/DarW9*JeDh|R[Z-');
define('NONCE_KEY',        '1j>.QaX;Q79GPv}f0yQ1 b]unXRC6,c}TbVjqX:v?lqGcvEk&LUvfkfEXZ(eF<3K');
define('AUTH_SALT',        'Pb{?l0VAB0AA@.;Cs>CN}wtWXZ%*I*2t dQWBl&Pt?,&`i#5h1pD!.aI!bg|8b?Q');
define('SECURE_AUTH_SALT', ':6E9?i9*E2l^4]H[q1yttN5&0UG05C~:i|0.F5SoN06=F8GtE!{ST{YqoJD:83DN');
define('LOGGED_IN_SALT',   ')nD9JEMSp/`c6Z.@2Aci~2t/_/7Q`Ho3#Brwe)!`C!Hm> $S}ZvUyeYd@5E(|,1S');
define('NONCE_SALT',       '_oa$,#)ma_%(7kz2QM/4?R[u3IHcc#1o449+8<j1NO>oEut>k<7]l L?lz=*6Iyf');

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

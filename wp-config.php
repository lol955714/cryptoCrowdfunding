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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nud3MjwzMNZ_XGeC f$l!FA[:zl8+AD%fh9I/1&uwTSxP>MuTLp-x*sYB!)~.T;q' );
define( 'SECURE_AUTH_KEY',  'x?e5o-=lHUa(`sL=q#va-qFLpd)DnI?0cIP9b.4GTP/b@Y5(DYiuVH$z6bam*>+i' );
define( 'LOGGED_IN_KEY',    'a[S5eK<_1>#hGTd6%iw;WkmfdgAdo,$vrrde?O9O.4#mqP0Y0 Ovep6GAS}~7Z(M' );
define( 'NONCE_KEY',        '.pb6<np+0CK1vrCmZdhM5jtsUqM,nansj2j-<kSIQHb[<&q<_i3!62_QxYpW}$v|' );
define( 'AUTH_SALT',        'lEDz.RBc]1V-0zRl|Dd(vm?+jLFv)}p}!Q2M8<[ji5v3dSAr!+WTDMPqh2VpG fm' );
define( 'SECURE_AUTH_SALT', '0PLU`az0TH{itNj**d}fhNZ,6J@|=;Z8I_rG%IY5Lm|q5d6Px !;6E n`Os6mVbA' );
define( 'LOGGED_IN_SALT',   'X*6)nxZ)n|)c56bfwE7^*hLAK3ae^aymK5;Yj6@KwPojlMKc{_IUb2esf$!VQp=9' );
define( 'NONCE_SALT',       'nYn[_J,]?nz^x]5CUr8*b}=}b4mU2s)aX{D>O,G.(X,s,9NPQ1$CFTV(nvCZ /RQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

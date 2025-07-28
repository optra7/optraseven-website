<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'VzF~PFd+3OI]&IjRe*V at&1CQ;xnNkqrE4o.DIvG~*k-9[EjEDt!QXRQa;<oiAg' );
define( 'SECURE_AUTH_KEY',   '% nOu6Xnrm:vD~]}f>Rt]$djhgE*9z~}R+26_u!VDdI277ffE`?E3XW{,WLq3X:}' );
define( 'LOGGED_IN_KEY',     'wc* 2K&S}hSGeER8$J(36VrF{@mE$NB<&ZiX+k|HVlOij~*4g5bRpcGy]$McWB)X' );
define( 'NONCE_KEY',         '8gDTIu}e;=gF JL)uJ j&dDGW5z[e;D?lSNHWn0&Rvb;/=-?O*60OU=/CBIl!jom' );
define( 'AUTH_SALT',         'Z:wo;0}nI5rN%rld.V}EruCWkpxI{jw?--rG3TefMr)J!#*wd)_6e>Tz :(ep`,i' );
define( 'SECURE_AUTH_SALT',  '}o@g1V]=j5XjF&pC.k/r{5Gq9)-YB.]4r@d1|u+)i<v~x }Y7.z!+F$U[LyOx/J`' );
define( 'LOGGED_IN_SALT',    ',_,rESV+|fe)6|4Opl;[.{@-kX9hk*m@MUeo;3#gK59MJm*]$/HOCV*}Ws1TV7.(' );
define( 'NONCE_SALT',        'J4rL @7R2yYZNRrnWq24Y08JJz+d(US4~t5+&smJ7}KF&mH(>>l;&.*m6JeI{yPQ' );
define( 'WP_CACHE_KEY_SALT', '-iuA<$6@2)p!;{{k.!P*CLb]H^XF$4@z,,0YRh@>5:>tfpTpg }/gE;TC]>Uw`Dz' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

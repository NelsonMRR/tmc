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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tmc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'haEL7tluPV!R%ji2dBwe?HkktGmTiw%IJv~Yez%2f;G7jU^qRrZS6^=zK.G&zz{$' );
define( 'SECURE_AUTH_KEY',  'S5A4rCo}A/wKy,H< :_S6]6oc=*B>B.Ea[xZs5 1,7jFW8aq>%,kmKLQRT9n)Y-j' );
define( 'LOGGED_IN_KEY',    '=y0Ni68oNEdua@trYsb>HC!0@HkmKMxAjJLAz-ZPx+B!Rt<90Ad7nb$Ua.jM0d`[' );
define( 'NONCE_KEY',        '=qe?T(z%rU6?S!T+CtXG%a={nI1yXI0*v%7hK=M{hZx*!@3Md(x E84]YvmZte@_' );
define( 'AUTH_SALT',        ';qySS*W@8 .I)d 7!?V1N=qh:SpN):MN?~I0g[W%re#!UlI !5RYqW|P}[$qdk18' );
define( 'SECURE_AUTH_SALT', ':NSu=Ftg/Dz)SENWsWwZ}392IJZC<w?.Ol0(~ u;:^U||7,yin.x-QL1?n>dKDTU' );
define( 'LOGGED_IN_SALT',   '0f}5u(CF:VVDmCi]Bn{].U/~ZgJo4_j$hn>}VZ=:#Xn[~uVFK$o}/eo`]X$x<4qM' );
define( 'NONCE_SALT',       '(n@4.|:&?=`QlRqz_g:xikzDtu~AQzkzG4|>6ks|(RD-<63e-qFH?v1KoM6eyOu(' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

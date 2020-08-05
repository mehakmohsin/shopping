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
define( 'DB_NAME', 'shopping' );

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
define( 'AUTH_KEY',         '?J(I=XgA.g#9hjB>?C9)IK` b^#~UCVFH,~5^Q+zZ)-0?,Po6@yedn<quR/~Rso^' );
define( 'SECURE_AUTH_KEY',  'L7U`K$;OkNh<vkkm)Clz&`QYEj+llVO2}K*luE5^n5tN<n2k4U]b5tFRDg~B?gd$' );
define( 'LOGGED_IN_KEY',    '9c8a6Szd$GDK<(+`|#^J>Q<XNy8~84/5E0^6]=}A}d.HrHQ>iW:i1CP1bR0ah#bE' );
define( 'NONCE_KEY',        'PKjrR/u6%S>.&6C[ql~km4j5]#Nqr*$0of*T4 gIMfXZ_t(%05Wi4SkI}VyM=.<6' );
define( 'AUTH_SALT',        'jlGph3cA>g>22AyL#)New6EZEX)F :#T9&x4{n+:OMjXTLT;a$-EDf@4;q2@Cw#O' );
define( 'SECURE_AUTH_SALT', 'Aq|;PCL{2D}]8$I][IThU_Xt>K=lx4lo5d_RLW2&:LNTm&[;g- ]zRBsd|D:ch`d' );
define( 'LOGGED_IN_SALT',   'dO&%.B@j,kOo1hatE+Rb>~ux.uNMq:G=:4lESbr(A_/g#0<I*5_#5b&8WRKOn#/s' );
define( 'NONCE_SALT',       'wFv<NB|s3<FCu.:0$kSImw|PP2G7lxD0-k7[P8qzJXBk;EL#<]RE.@[,{lM++/l,' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'hillhikes' );

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
define( 'AUTH_KEY',         '7@zFzR6zSbPwo[PiKuV.edk=*%XC1}82L/WA~r&ipb&Eg?xqr=HwC<5|)e]SKoP{' );
define( 'SECURE_AUTH_KEY',  '2lhj$se+`2a3eHam#eE?-!hAt_8CYn7~Zu>  EMP<pcON5;bw{?afY0-o.^{)lrd' );
define( 'LOGGED_IN_KEY',    'c+x|_PGmz^S08z+eh-Tj~j2c-%iV,lwe5}#_PvgJ_N#~EmN#KB@VX*.wdO=/Bot@' );
define( 'NONCE_KEY',        '7.*n-/SP&;9627}XzC:xobp#Izex5(knQ8_Kv;mD mE?^iR:~8%Tp]PBDUH/`4jH' );
define( 'AUTH_SALT',        '<*&~mu@Z#Om(W=2=x]R[UFe-u7!5mwNVK_e)v0+k9TQ%k_0)$83kg+HJ:J(![a@C' );
define( 'SECURE_AUTH_SALT', '&A(&L].yvz)dQb=Xcs6n890ov3DB-Qa~Tehc3,pdFyl_Lye9/z+ S|%V.N@3iPq&' );
define( 'LOGGED_IN_SALT',   'vrL{$tLj97[O^h<ud3J.~73Qa9rM{gy)0)Y+._MKA6583f[gb>n5CH#,*V(^I[(O' );
define( 'NONCE_SALT',       '#kQ5m{v+2<>jsXrq=LEe-sJF /o3=% X1w-$]2qZ8;|qQ^O<U_%FyJ?{B%_Y!i:^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hh_';

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

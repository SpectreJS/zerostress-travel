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
define( 'DB_NAME', 'u363007569_Tj56K' );

/** Database username */
define( 'DB_USER', 'u363007569_KydK4' );

/** Database password */
define( 'DB_PASSWORD', 'B57Xp2a60g' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'Z|,bXzUAgyp_SB7JULgb+}%867@T&a?V>{@tIr6bd1clpu6*zal*Wg8[@}JJCwTV' );
define( 'SECURE_AUTH_KEY',   '#<miRZEn$Kma0C<Ft|ZdD.6bkw^@BWmh71k2r[,b4zH)#m?zTgwN8/s8pL+E]sUr' );
define( 'LOGGED_IN_KEY',     'nq=Y_J14g%;0$:#QKdy$E2>?iJff6BbOx)b>aTQc:G(+YW9&ezj+^HAnew(JH5A]' );
define( 'NONCE_KEY',         'J8b*x=Umeu2au`5&MM_3wGL:%;^(z5p,x*F$q+V`<Cp(#_-N+ho.fvdMlz:[YpDI' );
define( 'AUTH_SALT',         ']E<oAu-Me7fkSUiTcNs8^)FQS.aE{g(W`z:i]-;Z]:!*~qlqxYC{v`b.CoWr0Tit' );
define( 'SECURE_AUTH_SALT',  '.)P?cp!O_x{wPzdVeO>]BzNTJWs<_T+V>!Ygy<p`RyD7@5>aC$^,He2d-RA|1S!<' );
define( 'LOGGED_IN_SALT',    'Zev}T%;x^QM1]Q5H(zYM0<x2Z:!/NpnJ |8|i#IYIsy-<csAmC.#~XUxesF=>?K&' );
define( 'NONCE_SALT',        'AxP9tPF:_L;,li+H]sNp>gG89XMKoUW~B0^D#$|t.OL{Az~(lpVGS_E|:g3Xk%mW' );
define( 'WP_CACHE_KEY_SALT', 'LN09nD`&a68v_JA|PY5j<(gMK$Aq /*J9)7/zXZP(2)QT-twS{YDqjQ5q6/~4SRI' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zt_';


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
	define( 'WP_DEBUG', true );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '3a7cd4291d4da8a0c3ae4f64a8b68dae' );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
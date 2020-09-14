<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'c1obs_dev_wp' );

/** MySQL database username */
define( 'DB_USER', 'c1obs_dev_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VbbfF9_Go' );

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
define( 'AUTH_KEY',         'qiF~4+;MUGN`ZiR+#znouo3lo-DCNTQ+g(S@gr9.2yD/H`Q:t4G:fGoS8u|P;T<~' );
define( 'SECURE_AUTH_KEY',  'KBP`paw{,tB!mhZ{!G!bXm])zRFPu*t)&#<eLLFv;#@?VW v.T((6^?JphPmJ&|W' );
define( 'LOGGED_IN_KEY',    'DP j&* 2Ac*moYD=t,Yw6q/>TPWt]`r{TcJ11yD+k%JQ;JiZyM`39PWe()N#GrqK' );
define( 'NONCE_KEY',        '^tOps2&WS8$pX]qB5~co6Kx{6K)6ucR8%ckh+v=@$ozYhQGLr|4SYTaMGj@n{4RW' );
define( 'AUTH_SALT',        'rov^m2WDkO`?KTOjE^Ia&DO-9-@d74&:7vTBOzR,}1xYN]XsR>v@O@!.$`p>ZJ]L' );
define( 'SECURE_AUTH_SALT', 'P 0REQeg&SajNv8]&b>w}WsrBen=Q=h,}PK{=i5^#%Fzo~W!nn,;Ci(iEr@h$m%;' );
define( 'LOGGED_IN_SALT',   'fU*p8%R,myfZ:!gtoa>|B3yy~aQby4/YyhdSWTPaZBs&&Y Vfr9k~}8-ZUeZN]&F' );
define( 'NONCE_SALT',       'Iv~(Xl4a 3Y;/60n$JsbxEaq`MvO#)}h`7<orKUJ4vd-/N$Tz,!hF^Pr(P(7OyLI' );

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

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kvs_website' );

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
define( 'AUTH_KEY',         '|^?bJhCp&%Uc>,X0ZY>E0Nlj~]M,eIe2v/>.tiYHA33Tde^lLzqK_hlAr6S~;gyh' );
define( 'SECURE_AUTH_KEY',  'd2vp/.G@b,9}R~i$ff;_J*f:9.!{MYFAw=#yAedRl~H2vlW+e6de3k7TcMc=A_m-' );
define( 'LOGGED_IN_KEY',    '/p3j5l0iWJDzFCr%thI[<xAqWRJ>v-jaLd&SmA$^nj{gO@pb)z;Mn^k({hR0]}Ra' );
define( 'NONCE_KEY',        'CMiEs%yF^7h.jd9]YB U+i5yJs)bAi)QwmL!u|1>.=9C3S7_@~8?Rn^r%KeA)6EV' );
define( 'AUTH_SALT',        '_TjYSd%4]-IoGc6T(X~7#1=K(<wFR[-bJrnIx%JK~Ee7Z gdu.4f]*QOc#`W:FYj' );
define( 'SECURE_AUTH_SALT', '*W|pL ~E!{Re)pXwk<5SNp,%QE[/CQ(]~|dxep;!fii`/aVSsIiaW0DG8?UI%?][' );
define( 'LOGGED_IN_SALT',   '*<=#~ (huYw:F(bHb?wh<C.NmTWhJZVg-#f4Od8[ZPjYP5$/;yo]0FgaWi}|<^8v' );
define( 'NONCE_SALT',       'g4$*^bqVdB*mybC@oE>:7dN,ZKJc?1 K51$sHP>0SNhcJ)_E|y7_x|:*7}Z:pkBl' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

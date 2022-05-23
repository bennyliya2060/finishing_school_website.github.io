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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JS{l[&ROi)&O|%j<t<QRd|Z{ID_?PgAkt-o;~[2P% An0F=A#8Gkc4H$FO{021Ri' );
define( 'SECURE_AUTH_KEY',  'd?z8b?HL<9&aRw&VsBHYy4.}!y)B2fp2ENzAbanSXoXX9DxrL#[XLie6sEL9*G`B' );
define( 'LOGGED_IN_KEY',    ']%rTfO>*@#N8Bc0QI[gaU/u~9[A:U?&@b- (XMZtE;h_.$_GGe5EE6Ad#-]jtyU$' );
define( 'NONCE_KEY',        ')f]*og||Y:[R=ot@Pzk>+ZF![ oIGr.DB~7Y(HH=ng[(GDYN`@ggA}P2)@|[u*q$' );
define( 'AUTH_SALT',        '9PC|a|89rv+q1u).g3S?t[xS?>8($u`12DC{aZ:+HchhPYu`0l{jG/+!44}&YmYI' );
define( 'SECURE_AUTH_SALT', 'S/pm+}Zn&A[6:evn?$-mcHK<HePY8+Y:ycR3AgtK-N}B@ zp~4/*/y*[mHs/A-n`' );
define( 'LOGGED_IN_SALT',   '#^-(}wsXftVL|<63,{]Y--UWOKa[_e+TN5ATZ7`v#|kwmie5z<.Ui[/q_H%V`UhV' );
define( 'NONCE_SALT',       'hFAM!I+Ob&vs0WNhAyGoJ<5p={Y|C&tcCkGHV`{TP-r@4rDI0PiCjElTUDaWS:L8' );

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

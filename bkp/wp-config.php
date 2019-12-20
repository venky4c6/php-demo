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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'yON:SR65VN]&t8hRlws7f]#HyNYQjTq>:7 Tz3l}vg{<8IOTfP(dm3~ZU})CvW!4' );
define( 'SECURE_AUTH_KEY',  '?<1._?Pl0k]lt%OnzGZ95^sh>k8<~mh/0hNgnt+N95%>&~)dtVCN/Qd&vpYHuzQv' );
define( 'LOGGED_IN_KEY',    'E_l{F5.Fb@R35NM[[W&Ypfk68{wP9*Y[zMcty[wC/eS+pMab!frwT(z/6QD]-Kud' );
define( 'NONCE_KEY',        '(y5H^U<s~~~WM! m;(^|4X+`:=;ca7B^_6?Lm54.A=|J:e< [d|2:C.v`roS*Q2W' );
define( 'AUTH_SALT',        'r<p4){]lWyVf{`gd!uEnwMj%!:3[X^<#H<C?+c#dD9jsd1$PE:ylBEQf!%}XF5ID' );
define( 'SECURE_AUTH_SALT', 'S_]5! 8hg`$U[=GW!D{wB8v1H]l!p}MC3i`zoH(^Q:G3.a7V33m*562x[GNzz)32' );
define( 'LOGGED_IN_SALT',   '3jy|R@ghB.He<m%of18hie7/O+Yj*>EMV2q+AXVIHU80<{v,S.pL~;oyRUD0F1Ap' );
define( 'NONCE_SALT',       '?yr0$1tIZdw=dA0vjyI1j1U@#2}-jwF2Co{hW=MBq6f -#$^0ber:l#WBg3r&w2~' );

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

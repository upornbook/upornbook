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
define( 'DB_NAME', 'upornbook_db' );

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
define( 'AUTH_KEY',         '@91bUbP2X|bBsjt+2d)XT]_x})0;Xz4`I6VJUu4#M;@^v`D~&i|N1tKl@]LT;xBZ' );
define( 'SECURE_AUTH_KEY',  'ZVoQXfpri ~7rn^$q!4Ib>ig/eLU{6i53h;OL]nC@u[C7K3 gz]Ygl37{{N_8JAW' );
define( 'LOGGED_IN_KEY',    '11M(q!:FyWgvT!llv^C(s@5ABt3m*TF]ZByT0v4nq()FTcFrjcZlY>ccT?4Y`FoM' );
define( 'NONCE_KEY',        'mLc-U&L/-DM4} lkN9/kQ5eQG{$lz.QFrbw7<|kf#$?4TKHVcdPeYJ `rkD1/Cg~' );
define( 'AUTH_SALT',        '|75X?Z?;N;3,)oXiA]v4xhu_DZK;aJk-Gw{DTqul#UdM*Igj_gaODnSn<9NmQ8RC' );
define( 'SECURE_AUTH_SALT', 'H3h7}k@=T]~@4A&xWG}`iZ6RKf=aAji@ok#$`cF}R{mz]lcu>wIGc*VEG#dj!]J1' );
define( 'LOGGED_IN_SALT',   'A-0SwsnsALRs{pgTShI:p6K*mRk1`w{U:b@GET0~*muZ[!NrZEYF(j8W%{X9Pj{?' );
define( 'NONCE_SALT',       'Pn[-+,ez aHe@s*[#D>xG]V|yV7h?1shvBQYgFY3bNSV+o7-KrvWw/ <oq*-j(4+' );

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

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
define( 'DB_NAME', 'taha' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'badboy101' );

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
define( 'AUTH_KEY',         'Mk!18i87,aq~`m_n8#31a6[dY:vQ7BZ@NG_^a?rY501>4._FiiVY)N|=]ayc 127' );
define( 'SECURE_AUTH_KEY',  'h] =3%{NC D7y;%y%*!O~;U39Hl:Oh*V9o$>NE:yWF &/rT/$.rW1cWl.u @uV#u' );
define( 'LOGGED_IN_KEY',    'cwNt+{QT8%l!iK`T<Y[bH9g%J|)_NZ,5_Y`0hl1@U~Icc/:Dz|}UMO U]N(5B?Pf' );
define( 'NONCE_KEY',        'N?3gN]v=926BY*F=@e/3j4ZXB+UfzHfv0XX~s.(S)wsw:L0YDbh8-eG=0kimVIw ' );
define( 'AUTH_SALT',        'D9XnQUN$}sf;}L8Z<%/ZN[9%y4F*<0u]jK;V7?w?Wy=3NFZGP:Omz72oF2H*@b@L' );
define( 'SECURE_AUTH_SALT', '|}T|6sY0siy=RR$TC`D1!;fT&Mv0BB9?WBgzvZ6/tMGaPL8y<_s.JBF;(/nQ7#+{' );
define( 'LOGGED_IN_SALT',   'qpQ,SOvBO^CInw([&YdOU,Z#3o1qvyX^U nJXHxA/o&N)Uc:/xO2MSCEv15JAs:j' );
define( 'NONCE_SALT',       'gEERULD^cA*bqL>M<&&-/!6Iv`zl)ddn)Zz)oCQA!b(53e2HZgCx<`wF^ =X!.2z' );

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

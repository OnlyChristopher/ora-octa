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
define( 'DB_NAME', 'observatorio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'P9Q,|>Ok4.Q,W5!3lG%H5XE=WOJ,0E)kOV<4`P#V d[/Tz>Jgcjv7d |m-DO`^)|' );
define( 'SECURE_AUTH_KEY',  'Y[_07H>=R@Tv4m} ??<r?;d8.2+Bm%/T;OAT|{a,7w~qhQIi I|%VI 4g)*SEbt=' );
define( 'LOGGED_IN_KEY',    '8uBmrI&_4*g((_|g<6(+q,ZJFqUsOo2E5&f?A]+m@l2Fqkbbs`Oq*7N|t9(:x|Q<' );
define( 'NONCE_KEY',        'O#PN7yk<-[TF_,SEqDPB))5f9!BbcGw~CuVW${KBa0-zt7N+MOxSou#`;ixmpjfg' );
define( 'AUTH_SALT',        '^4w?H+CTUlaC~}kr#=?f):tr-BjY.*,fib:x|%4Rj3A:D@=QInZS+b%d7 cwB9f(' );
define( 'SECURE_AUTH_SALT', '#cSWBCj<@uznIxt7Oh3=ot)n@<2+p8@qGHoWdO{@j{;5>?&j}2>9y#C0T>#<C|?5' );
define( 'LOGGED_IN_SALT',   '*h@e6%F:KOfthh*?T.)qUj<k]xRP%%_[Q-;^{Wy8A0NUng[fsqZ{H^qx^{He*376' );
define( 'NONCE_SALT',       '=**>x2,crUD!M.kK8PSCC=W@;f?N6k*e6m9T1mVy,xyL]Pp%dd);f<@wtOu0@3dm' );

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

define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

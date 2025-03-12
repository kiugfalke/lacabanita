<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress db' );

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
define( 'AUTH_KEY',         '(P?vWlZZql&87zz!r{(9)xXkFY?[C3=sC*47#}Nf^e)2A{IIr<CYT|#12wuKA%* ' );
define( 'SECURE_AUTH_KEY',  '#U|h%K4!+pUQ0awtn?@VGE?o4|}!`OL[9@/EC^P{j112Ca9R.J+|;;$FG^EXWxM ' );
define( 'LOGGED_IN_KEY',    'gTO8/yw@:dJCcX=K7CPBQP?pqvI__.0[%.=%` }=h.p<U|_8_)h~3tgi-u6,gpUU' );
define( 'NONCE_KEY',        '8Wol_Pos[R#ggsVC{vD;,G;(st~%`&mfLV1 |HH8Z7P;&sN0z+G|M~pvC:,mkSba' );
define( 'AUTH_SALT',        '5!}w@9Z_y06dDb#8ps,6FsC4Af(j]&mu!g5BZh H%vA#+*C3HH}N&_:@/;:>Yzn7' );
define( 'SECURE_AUTH_SALT', '~#w!w5?{Tcul^ByL_LM8bS%0umtY/5~[li=ZeF8wy/= >,lLWwdN/R2ytjS)p)bD' );
define( 'LOGGED_IN_SALT',   '|]&UcLM1|C@yCu%wI>3%D83(yITV.tCZx&LW4`q0y~OQU@qe@;sE,<sMrCs<rE1>' );
define( 'NONCE_SALT',       'U3T<f 40H>-Ev{lR^eT3=&a7+QQLIgT^D^h;^TwL.]C+*1ox-),Nq3*T`lJrpf3`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.K[NHl=G=WRq;2@8p+9#kgc/7z0`S(}|X <d+aH*v3PaR(][X)O%bOAJ$%8v%<O^' );
define( 'SECURE_AUTH_KEY',  'LDG^<mL4~6EnI*sV@AGKST3p;.gn]}:t/j[?veR9Jt:g&J?iX&ss]_uR&XkG_n$q' );
define( 'LOGGED_IN_KEY',    '.EQE4LwaZX7J.Sd*B<6WF3CA6a^X}7XL;JgU=YKe1U.n`WICj>5utHo.yh>vi{zo' );
define( 'NONCE_KEY',        '~h~-/{_`Cg_PX{Y,[&s0K6hp%A=%`7lW6FVTrG=C:h e6lMSF*yp%~n/h=O.R+Ha' );
define( 'AUTH_SALT',        'q+Xrt_E#1> 6C 1^L`r]xafimq%%/IBaIOd#S,=/QJfry~Ws9Q;)=@`zkG&FPOFM' );
define( 'SECURE_AUTH_SALT', '%&[B`CcDa8MjDBfKmRn[NS^c];56~#<a3%J@AyxFJ#blzc)HTr,Obst$=>5vQ<i2' );
define( 'LOGGED_IN_SALT',   'rU)Q%ATduu@G>qzfhIrg`uMnhC=RfFOI(;ds=Pi=v(MLV,SVJ(.y(*#Z8JZ9 Vi&' );
define( 'NONCE_SALT',       'SMHDDqE1m.G%vWlw3E~0Cd< S&l~4d~6>J<{*w%f/H^bkPH4P X)Y<doe4`n7w--' );

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

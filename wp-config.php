<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
define( 'DB_NAME', 'nhhhtyw7_wp_htcbv' );

/** Database username */
define( 'DB_USER', 'nhhhtyw7_wp_kkcwx' );

/** Database password */
define( 'DB_PASSWORD', 't~*GeJ9M^Q#6K%u1' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'aFhk4M5-cmwLUu_Xx_y2wFe1*KUIz1:s[-49_K5Q5]paX3847Z2ZtC_8;E;K8naF');
define('SECURE_AUTH_KEY', 'zzn/9|EdD9*0_Cl-5[Rn6%@@d_d_4g4!72iWSvpa4hM2)y9|j8p2:64K5%D3@x[h');
define('LOGGED_IN_KEY', '4541TA0fF0+L680StRB2E8C0cu!W+0o@+N95XXY6~Wx/to#|004Cs*IMFH85T[Wk');
define('NONCE_KEY', '54J4OU|s1)_F1]_s5%K:aa82%Eg0r@4%ve&8jmk&gp3EGI4/sx-/Zh%7K0SAwu9S');
define('AUTH_SALT', '24cl8[|d]7Y8(!Dd/3mi6G4&uD4E4W#o_669ZE_33RZ||Z|12(SITBa+0##98KO1');
define('SECURE_AUTH_SALT', 'S5%Sm22d)5gVA%6E6)VDw!RYnV3bXw|;3O@uE0@s8%)cC)RjfelV@33+fk3j@Gf+');
define('LOGGED_IN_SALT', '4k!!qe#5*6Br&5d(5[62S7x2j/mbRD/!H4/8v3@A2ilT]964a*j*&1D5;U[[[j;5');
define('NONCE_SALT', 'nR|52+8twYMB1e82+Lq[-JzyR59)Zg~F-%t68G7Z+U4Zv86f__#~@+@2PCn:T327');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gtct_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

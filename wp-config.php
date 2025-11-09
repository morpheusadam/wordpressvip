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
define( 'DB_NAME', 'morpheus_a' );

/** Database username */
define( 'DB_USER', 'morpheus_a' );

/** Database password */
define( 'DB_PASSWORD', 'v.GNEUg9f=w}' );

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
define( 'AUTH_KEY',         'k3VTaH*Slabgv%0M>vl!j=*}5ROsBh]!<Cu_&?M^)-&i4daIS|JjH:%y6vlb=(t|' );
define( 'SECURE_AUTH_KEY',  'OV1ap-U^Co%nDZ_u,cu]62pV~)>jO6(H|v[j^q7oecChANe Ls=>ShXt]p&H=Ba@' );
define( 'LOGGED_IN_KEY',    'KP{$xYu3g)##s?]ZTC)3:[{$e6]1xP$E$L.rG<RfnI?,rjh5vg#i?dAP^,G2I23q' );
define( 'NONCE_KEY',        'w-N6KnWGLgz//nOtMg3A,8-&nT5/_qoHQX&{w~F_^TPvcYM[Ek,#M-W9q}&gj6aL' );
define( 'AUTH_SALT',        '(mQ28%/FD#gJX7zt*9s4{v4W1r}u,bDLtBX3o)1U-[kYlO!G]b8]Su%bM:wGLynw' );
define( 'SECURE_AUTH_SALT', 'p~ )R6G@;A wjVKR>_6EKx@jY=Q&.P1EgOl}F!4l5BF[v%(nMB;IaYQzqH]jxWx[' );
define( 'LOGGED_IN_SALT',   'P<6JV=d{B$],&-{By,CRMzf]i-J@Ml?P(#6*|H;9[,:LQBkSrYaeiZ|Sd}Br2PaQ' );
define( 'NONCE_SALT',       ')~OrE8+y00k4![ROM?->_d}OVt!XskHZy{{DJR`RU03hWy:-s|+8NB-m3hB<mWt!' );

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
$table_prefix = 'vp_';

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



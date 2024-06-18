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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'perfume' );

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
define( 'AUTH_KEY',         '!GCK5wxC-!z111&:V~w?,6dZMH=6@FM)B_=p|osEwT(&6F;w]]r6siTOC+ |~aj4' );
define( 'SECURE_AUTH_KEY',  '56%?>ebm:>L=:b)N*(vRi/gn/mt:S6/1f3myOhF$Z7Hd{|K3gKH?wTXfA nQ|1},' );
define( 'LOGGED_IN_KEY',    '8K9D~EayK1e?ul-Q_&xrvn*IN7ddZs2 N}}l$oB3ijt4i0a(F`Tf@fNT $<wAVjj' );
define( 'NONCE_KEY',        's=Z(*DI<Z4G9.jcS!q OZc/SJI;@fUVs8b= oQk4PCCEy_O!S}8P2/vW@4![^rza' );
define( 'AUTH_SALT',        '~A=%T;Z;7IDF2n+QdI`SMvAllE2$Xi~oJrV6|5y&dnWsH[a2jGB=(_XFSW|%E*LH' );
define( 'SECURE_AUTH_SALT', 'oyz[$<zF;prA!fL~z6&0X[%=M6`DMi^p/(jq@26h1[`wQ.|/Qp&W^hN!Dk0*k+>/' );
define( 'LOGGED_IN_SALT',   'o;#4MwZQsW{qk9&j=4(NWA.N{gDmEjwTW9D4#,NRVXxrr<3cU%jBI29km,z3{|x|' );
define( 'NONCE_SALT',       '{edFH88;lG#;NBFO kKr%qheldkVA(]q|_lya>g#+9~%z,9d(=HsUpR1r`RkD<ID' );

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

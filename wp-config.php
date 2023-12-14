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
define( 'DB_NAME', 'lariv' );

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
define( 'AUTH_KEY',         'lZb>4hSRzAFau/pkq5`ke(;~e#Ma`HidD!@[w<vZBL$bF>-bWbz+~+q ^H2aj&*C' );
define( 'SECURE_AUTH_KEY',  'tiIk9?02hmt2_*ff9WZZ8-PrGN,c?* V+!i9L-h>0^g,!tR[.VAbXr*W.wHvHeDv' );
define( 'LOGGED_IN_KEY',    '`^DDUCSOL;E?=!Cy=(DW(=l,oj19V_@juYJI|;B8ti7KZ?3Rt)j^}-xA!I$&}XkU' );
define( 'NONCE_KEY',        'Gy@UB}}T:7[FtNuQKJ*5f6uih`aLxT9wtRU-S0([7$<9i{^RG^[was4a3:hV;ium' );
define( 'AUTH_SALT',        '$C7iXfbN(&=x[$iH*)f9BFF.O>dZj-lxBYSUI<Kr}W$h,Mm%Yt_zDobB3Q:};X5>' );
define( 'SECURE_AUTH_SALT', 'Eur5 Of<Ay-lnSP)~t=4si oH9F1sys5zF*qbL+9Xh:|8]l4k|F{m!hRW1if9U*$' );
define( 'LOGGED_IN_SALT',   ':d0;/W-&V;9,@b:[Pn5xs%Ue006rV~rYziP+6_1BOqOg>L5=+c%7FM)%P?$[)Y9g' );
define( 'NONCE_SALT',       'mKe>ikp;(Gw}R/5N>jdE-^RDB@iR;Qo?1]%_(ZCM(=S[tNO3o)(Pmuk,/wT^)%$T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_5';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

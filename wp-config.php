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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoppingcenter_db' );

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
define( 'AUTH_KEY',         'R,ENs[L=G.Tr9QE99oUcT[y`RIsZ>G[P2G[[4%PQlB^wNI!I6 6anv1SW6R[slWM' );
define( 'SECURE_AUTH_KEY',  '|7)-tpyGsSl8#O y^8n>*8[kR3)eD:<8N5+G;f+|4D9cHZhd#H3}nU:` E6jZF_U' );
define( 'LOGGED_IN_KEY',    'dt&cUA,4;D]Qq:KtxIZo~oBDVI!S[%[jOc?nDIH[(&21)=4[R@DhUl*}WHU,yVgy' );
define( 'NONCE_KEY',        'T ^kv3V@dwaum>0(aiN,=gt>Q7LJ8SV<<Q0fu``WhEdu);fzp#O:IP/-8*YxxC=O' );
define( 'AUTH_SALT',        'Q!>8rY4l*5^Fu6vRs7]KE&@^mh6W$[_B;E/Lv76D)GS3@:($IS&_-j8@A}vtp,]}' );
define( 'SECURE_AUTH_SALT', 'Um>B9TAnFzd0ikH|n&?Eg]]o_?V$c:LjQ+;Y/2cpNnfWN6@i8 V=4@Xc3~2bWDS9' );
define( 'LOGGED_IN_SALT',   'fh7wrq#bz5&wsSDa7Z7r3;sF%lF`.8=wq^J#yKiJiT{w`Z-Ky/Y_ZooIeZC#z*GT' );
define( 'NONCE_SALT',       '@!1iHh:*Hf|=g;3V gn1ryb=xL%!V928J3YY)KODe]zL>.$v67>`qWH~]$fY7$TS' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

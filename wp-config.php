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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tamilardesam' );

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
define( 'AUTH_KEY',         'dm@qB`n)*:u }gxv-&c.NiTWDjBH=?%v+$`_zP!W^NXc^tp3Qa<.:I-/e`D{f:-m' );
define( 'SECURE_AUTH_KEY',  ')Am]e;oEsnk({afqT85EownIF~UKg^ovTH[.}G|=3<?eIoAPR?)U8@Y0-`*5e(Js' );
define( 'LOGGED_IN_KEY',    'H_4q2O#x9_dD6< :Hl<BnKfMN0YplQEBGQ`1SyTZF6YMn&pA]#~uN;?>5RF*?v B' );
define( 'NONCE_KEY',        'oq*1UOpJ5Oo-cx431=$=2 IngPG}D7Ck2u$wM6=0]z7fF)zptF/4_;xMYzdrGgm:' );
define( 'AUTH_SALT',        'lr=g]raqu`/$k>#:+sil<rW,)bL(b{G,VeB+V<8~}EzFvN>{HtUoz70?H*qu%H_$' );
define( 'SECURE_AUTH_SALT', ',]t g746>H[V0JA%E|ST``9c?U>,N~yhIqN1]ae/P}DbvwemlZD1?;T8cj3f-o!*' );
define( 'LOGGED_IN_SALT',   'ZY{_dn#Z/WBnJ20qyif4D8vXQ2#M*1cG$<O~c,A&cRj-qV>g|ryU>?v;I2;DM;|5' );
define( 'NONCE_SALT',       '/O/! L}Sn+rgzmyX)>]8MIk[=CKb7yO;6JKZhn9Ut6h//wyS}FRZQ,!E`!*I_l#x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'td_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

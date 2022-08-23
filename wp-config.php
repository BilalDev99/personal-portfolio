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
define( 'DB_NAME', 'colleg' );

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
define( 'AUTH_KEY',         'soQi<<bwFfuEPB]_e/@`kvv16rJ}Sc=:qK~8``bZ4v}h6xx_#HF0Xg)4h!&DhhdX' );
define( 'SECURE_AUTH_KEY',  'JA+3bz}So9E2tV~1Wb4bRwqUhG=Y.l(nytp7h}IJqq/73Sy:XM,UN< U@i/NG+d>' );
define( 'LOGGED_IN_KEY',    'BXsaNR@Y%5[T|<a<dT+.AyDQatSQP? vPc*H]A5RM.. dyT}7EmJg:w:Oj*<rH>K' );
define( 'NONCE_KEY',        'kq-2#@*DSam_%{8P^1qMidAg+ct ugw_$JZ$rF)#n%@%+t E`WFH44_:JPyF7KeU' );
define( 'AUTH_SALT',        '{?K=5Wb7Nt8n6%f T.cxtmq@EgM4x6<nj_*GQB%UA[VQaqqY=quVZoS[7h6_j9Lb' );
define( 'SECURE_AUTH_SALT', '%@o4Z5rmg;,%B4O|&@I_AKcC(UH^p{J&wq]h{U<mff6G(r^Xkt~kO{T9z:wD?<>v' );
define( 'LOGGED_IN_SALT',   'TWw/6go*/Pq,9>lx`gkX;mFj{UD$3{Q8j}L=E>=;K)tzRpWL5fF<mHEf7nmE6<xa' );
define( 'NONCE_SALT',       '*(EL)Ek/#FY1_kEy59?t}ToegAW<tDj&xMntkI=KQl7ZL{N[ v4+.4SOF@#?(C|~' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

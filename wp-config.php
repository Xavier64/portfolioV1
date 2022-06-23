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
define( 'DB_NAME', 'XavPortfolio' );

/** Database username */
define( 'DB_USER', 'Xav64' );

/** Database password */
define( 'DB_PASSWORD', 'step24' );

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
define( 'AUTH_KEY',         'vdLoa!YPJ@H,JU4;-JcRm6vT,9!`l~WXv-Rw10l7J!VR,3yiE1V?Q$s^^%KWU;F(' );
define( 'SECURE_AUTH_KEY',  '+U/Hm@E%)QN;]KL?1*YTTd?RqfuLl(R>uxwxa4TwbO`]nhAQSW^AB1S{mM-$4/YD' );
define( 'LOGGED_IN_KEY',    ')Y(Iz{x ]*sU8B8@}_1]KxmZxG?GOv~mos@NrJ@.EgdJ)V4XN4e6K3&WL!<DdGmt' );
define( 'NONCE_KEY',        'vHFtR?=_t*f@(2[B{7#^xT8E{4n34P3N!ll{=b#})d%R][-|,&Iq^u[RW}MvVYQB' );
define( 'AUTH_SALT',        '9HNnop!A|:R1^9$br5y,{knEFfDL99.XpVm.1NoZ%X$V#F$FG.9&zu4mD]1{girM' );
define( 'SECURE_AUTH_SALT', 'v=J6gUEY.jRBeH@7yfpLkP/:;@ WB2V2!oMDnf,ZRrTB<$53 b4y<8O=Q=&F5=`#' );
define( 'LOGGED_IN_SALT',   '0hUofB.d+YmQL)XHbICpD:Cy} 0RQB~)#B/)G4&}SAPrF%.IXX~rZPHzw4B6-U)w' );
define( 'NONCE_SALT',       ',TXfK.RjX4sSDQegC}vKdzYKn#{)m(zvc6ol#beU|1>0B 0JYk7`|8v6Uy>+M-7R' );

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

define("FS_METHOD","direct");
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
define( 'DB_NAME', "veritasinteracti_splus" );

/** Database username */
define( 'DB_USER', "veritasinteracti_splus" );

/** Database password */
define( 'DB_PASSWORD', "&MQnz\$52Ot@&" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'v).;UyF/q=#;e-0KUk%cl}*^%z,gHHfaF9{J9.ohIjsI&M&g+YlF0f}+f<!^$eeO' );
define( 'SECURE_AUTH_KEY',  'ZF}N?;bGJ>LTj-?%vTbC?z>7GnUtE~<9Ll-6M@eB&[Z7<]TS8Y[K8kY+Z/GbC))c' );
define( 'LOGGED_IN_KEY',    'g&mJzMaql^W%7oIN)}R^A!5a/k(=3d WOParR`)`C6%&<^X3UF7PccHu6#BPq(G#' );
define( 'NONCE_KEY',        '.HdJ0.fY^QG42}8))x}aHrI[*=-FwZbNhEVL0]DmKVWl2|NhlEiwRB!%uc9oI_SK' );
define( 'AUTH_SALT',        'KkJL!(Ib7)wW?C?-O^a9B6frrOp&B};unfG$Mk<)e,pko~2b3:oTrRXSGnA%&zLs' );
define( 'SECURE_AUTH_SALT', '{i^3a|{^dApn*MVomeK]0%&$fMWeGD,g5hPZ<~=dr7E<ni230n#^`5`xL(EKEEI7' );
define( 'LOGGED_IN_SALT',   'QP0QRJvD~<zTJze|e21r9Er#]0&[p|JL?n 62f`+Y<.-w_v27j]CvFqMQ6zgMn,I' );
define( 'NONCE_SALT',       '|ioJ3H=lbp$_NkAPh+Y}T|{sni1S@V)s_]N>6%)  7q7MpA5Xuu|ksfwqQe T$c*' );

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



define( 'WP_SITEURL', 'http://schoolplus.veritas-interactive.com/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

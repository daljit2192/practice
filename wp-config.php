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
define( 'DB_NAME', 'practice' );

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
define( 'AUTH_KEY',         '2!vPwbp;EYGqa+ ++(1AsQg2G9XtG G*TffmYP:&1?Um<)w=|S+hrzt~+7$q,eYd' );
define( 'SECURE_AUTH_KEY',  '<ng40}k((Yx*J7hB#2*u#?]r+Tc>9Wh>QGjq,_~oL3E_^<z>Q>p@L}D [rsE2L3D' );
define( 'LOGGED_IN_KEY',    'iN&]x1-}^?4E2_hHu[w&?T!9=cuG|m_C!?XXB$_J2axP?+PM`0kH{;}B#.xiRTTz' );
define( 'NONCE_KEY',        '226%wWyT CJ|w T=Zx1e6/FHF5B!Cz]:SO1I O%,vhG^>jfHJ|0Zo<<Hnl$O}NYe' );
define( 'AUTH_SALT',        'FwUkh0Kr|X~eG!cZ:`:Ba7b#W=xo$E@sTUUuG1Djulg0@}?pFl/-dKnccEDy7=1E' );
define( 'SECURE_AUTH_SALT', '5]c(@;SN/qjo3knf@tnOzys>|1,JPC!+}=5,}f@,GHMLYJhJqm3xYolqEZg] NKy' );
define( 'LOGGED_IN_SALT',   'J`M[EGD@J>aos@YSXwKmh%fNcnu?6@B|Xz+d#k@CabT.E}1Kr.b2O,kl1V)_&b{X' );
define( 'NONCE_SALT',       'z}SR~38.vm;2B:EueVRf@]?(<>B>9o5NCP,t9iF[2,][t CtypZ)b5szP5?w#xb1' );

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

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
define( 'DB_NAME', 'chuyendecms_nhomE' );

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
define( 'AUTH_KEY',         'O!#  D_< <s*hNU3_/ PRHynn#[D3;xWRoBEUqgHf;4)(^4qyL{CyMRoL_vzJ[ac' );
define( 'SECURE_AUTH_KEY',  'X&fEleOCbDx0W$BR}Yi9Qa7}:S9vvXhJX~UdwO45Xq`)ij}{7#7vy:~$[T^hTX:Q' );
define( 'LOGGED_IN_KEY',    'hc3zRI373c$j0x`7+29Za!{|#(&Ckq2<S,[m|U4Jxm_0!eZIz;*=l=W}07Wm=]%L' );
define( 'NONCE_KEY',        'Ys#&X9=/ce7Mm(%lNZ,s;ZAgs.L*?7_!R,Xwg{S3E>q`r0zee;TCTYN;gZ.f=5V0' );
define( 'AUTH_SALT',        'o~,@X0}dyIQv1t0r~/tN^iuDFz $Poy%}==[?^=M_*FGVIzCp-[1]7I`B)d^>A~y' );
define( 'SECURE_AUTH_SALT', 'h+*4~6NW%,6P~Sr7Rlm$hFX5_MsW3UQWT)>T{_MK~p8KSPL-CAH>e=+yCM<_]+U:' );
define( 'LOGGED_IN_SALT',   'hhw}J`?0%vzu$3Q|:~CyO@~x{W6 JBp.N9g#w8E``NNoyF_4?s-%x0l`j`c5s^I-' );
define( 'NONCE_SALT',       '{c[b.5LN^39v{gF3e<]p:&wLc?Dqg];M=Idoj%TiBBkJDJ0K7=SqWsR :pVWbU}/' );

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

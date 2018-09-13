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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sg8PACED' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '6,Rr5BNwwl+^jR_J|U9N$Q|V2((-a~aX[[ISTF5TGwzDo)hA?}?rL6R$QC$#GCgL' );
define( 'SECURE_AUTH_KEY',   'l/EiQfxx&{RBD@KS2E{Gl$ma1S:y^8H4(c=W{`d1fz1@,_{|Z1 MA8gEn#zg@me/' );
define( 'LOGGED_IN_KEY',     '+^Ta7Q^OAZ%>@>^!B*.hAxr2l?Q1A[Y0@:Kj-=]cW_h>1r>fHwBzx6(NBXgj[pYf' );
define( 'NONCE_KEY',         'YM4{e*:]b*qT8e|Jo Hr`K%R{H,K[8K32j)9o[[P.^gJ>g<fIuT6[QD@S wEsn*t' );
define( 'AUTH_SALT',         ')cheGs(oS2Surk3+gp1waL_#D!U~RlX*iw|{)Pr,^H+,~FUxPL_aHY2zDv4=5-5g' );
define( 'SECURE_AUTH_SALT',  'p`w9hvb1aZj,6%DbUwo[$MgpoV=Pn@;}Nt2A4pwrVJ0(:=)fvV5h K{P&Pcl#jW&' );
define( 'LOGGED_IN_SALT',    'N%X>ho9D}V1kyf?p`7lSkI7yII}IdrOmy-zn,^2z`X:]sOM{pJh6iiY@en=c+Ibq' );
define( 'NONCE_SALT',        'Po?/sr0|!1jgD_{_F9/KB%l*Ah_1^kB9Pi9_(SU^rQC-bQ$B2^BfT$}hRh}xxx7<' );
define( 'WP_CACHE_KEY_SALT', '[ >3CDR_J;nhrF PL>;HheN*-Gd/UI{Sa~TWT}Jz,}Y[xQ=/V~(nu}^djwrbuW<*' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

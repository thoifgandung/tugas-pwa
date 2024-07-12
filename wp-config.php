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
define( 'DB_NAME', 'gunf8413_tjprofil' );

/** Database username */
define( 'DB_USER', 'gunf8413_db' );

/** Database password */
define( 'DB_PASSWORD', 'admin101009' );

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
define( 'AUTH_KEY',         '[mH^W0-MI*8GUti8d%nN-u:&qg&K{]&0T:EERYd-|;9:;+eAZ:4p:|:(w~V I5ER' );
define( 'SECURE_AUTH_KEY',  '+3zysOws7[Xne7jr=A-..F9KY%;nXEQ+cim6y=$Rge[~?]h_Ep|MK8{2gvR+i|8C' );
define( 'LOGGED_IN_KEY',    '.Ssmhd[:wPrBhyC`ka~C2Bo)Hv$=D9JWIeIxayP$8@_6bCL!K:eVh9b!{6|]!)*s' );
define( 'NONCE_KEY',        '2kM3y{7]yZ/x8Mdscw!Lw9{@s=lYx7gXnh7ML%,459.;R`2Hoj8:?T.D`OT#4c}j' );
define( 'AUTH_SALT',        'S7+Fu)<l,Cb}YYv%Xd6Q<WR_UvTV6vn%v8^<1{6i:R*N9,?i:8]z@f9#D5?G9EW~' );
define( 'SECURE_AUTH_SALT', 'd,x^L5gHUx`~dah}x/ut;tskcr Vrjh._^Dwvyiz7R<oO;B:#wJY7[:l1TT/C_~b' );
define( 'LOGGED_IN_SALT',   'm^WJlT87sOoN$>jj?{suRF{IPfrqIYe`w6ucyHkhcXxU6QEO?qh$80[[WLsP/ppE' );
define( 'NONCE_SALT',       '_A|2Z`!|R.b*@+f +Z:[zMC.l^;ylV=h&[+95EQ4+cm 9yDasbrh`rs9Denu$.!>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tj_';

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

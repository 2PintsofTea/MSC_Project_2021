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
define( 'DB_NAME', 'faqsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '%@Eq[x~AJ*rn$Ey7,w2H0HOpxda=QY;h&[rMW??[r2;6z!az.)Kq&6J_@@T7y0gQ' );
define( 'SECURE_AUTH_KEY',  '}:6;!JX~^.HI:.<s&u,nd)XwYkvQ.;u[tknfUZPJ2{>GK6NZ1L)e[jm/Z+BHs.C-' );
define( 'LOGGED_IN_KEY',    'W/spc%MAC#;?Q6T2XYgoS~WvFDNzLw9z[{?#s-R,csF~N$PARoZ]f_n#D,KWrHY&' );
define( 'NONCE_KEY',        '4Rv:JD[Tox ${QAJ^/D8N63uNeE}U/8GO( /|F&iuC[uM5gf:z2BP{T6WdKlkOg?' );
define( 'AUTH_SALT',        'el)YlQ%m8HT%uPm,8eE?zBt~_tQNmRR_Z`6wh!?LxX-g]@4dy/ev#^v.aVCNyf7k' );
define( 'SECURE_AUTH_SALT', '[S_@Py~Y_hl[UG43$oqK29+:]}bTeQr62Hm0eT*i^`|^qJz%8rO2w/ho#^s7!@W%' );
define( 'LOGGED_IN_SALT',   '7+ Qba[O-k65YH4W+@JZp&M/uk8(*cI)8|3JPgJ4,6^GsCsE4$8G*2@;457W+sWD' );
define( 'NONCE_SALT',       '/Ws:[Rl^W1RA2)dUjpC>c}(%UxYpM1*,x4>5%X,iql6y5!W-b0XIO_GmkJ#hic&=' );

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

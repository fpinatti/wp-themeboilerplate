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
define( 'DB_NAME', 'ibn-website' );

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
define( 'AUTH_KEY',         '}weq)bVA1KbvJ$gA6%&QAT6Bh!I){+{?<[s{sEcs+llS!b^P,Pu}F4e!pK5[m-6I' );
define( 'SECURE_AUTH_KEY',  'Zf_$|y #W7sx}37=nUY4)8OZ/3<FRdkcGN#u*6Ep0I.fFH_x6qxO5XUsvQQx*Wo4' );
define( 'LOGGED_IN_KEY',    'dS~+WNOj(t<xxe?lWI2AIu3BA/W%ogkHQ#QXj4 #2/m,(gmMK,$SkoD*7:+op{QM' );
define( 'NONCE_KEY',        '~c8e.<EaFyU)r-GtriR/RW;Bm:ZC5R7>Nq($if?/;%j_.DryF%){:ftu(pyf5kCA' );
define( 'AUTH_SALT',        'q6fuJ{+[7`&D0:0l>&8#p:jmQIK@^ONVE]Zyp~ae*.H?|2itd?viDa+Z5=a`kR+W' );
define( 'SECURE_AUTH_SALT', '=Y?_C?7W|F&lt8yqN^?r&Ax,[lr 5)b)5!5w50*%/RQjC.ms-MDw0,F|@Tad+7En' );
define( 'LOGGED_IN_SALT',   '|y%S(v;*xWJ5Y[6bFD|40Y)dO.~m@0!XLDqf%ev3d`%Zsu}gyyh8|vY9.UIRc$Pv' );
define( 'NONCE_SALT',       ':`^k-}8_$aG}?9~}f%ExBH,=tDh]`<`i3mBf&xH[aBoAxa0eXmYZ7wcZ!HmR)YW1' );

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

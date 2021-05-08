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
define( 'DB_NAME', 'tm_ecommerce' );

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
define( 'AUTH_KEY',         ']OI#D2PXvfBK~Vgf7$+li)Lyt5iJjB3Q@ec4C,$iNNYrr<A<1okq[(;<}`A`Y+bp' );
define( 'SECURE_AUTH_KEY',  '_5jiof!KuY,7bZ}2YM@[$~Iw@*Ja{9y%lr=Z86-$Z(RqVL0Vy?`]bND_p]MV|`*j' );
define( 'LOGGED_IN_KEY',    'aPm0>hn{qq5Rf$BGmJ?PHY,Sku]r|o?J(tM,X}l6ytUW|-jpCt0*[RF9)6s#gSIP' );
define( 'NONCE_KEY',        'b9_X;MsnW BD_;^T9P^<KOd$;$-PbRov?<cGVA*!c$MX3)Figm osbBv0=/l|u7p' );
define( 'AUTH_SALT',        ':Kw7_q33mb|}Q@u/Kw)Oc`B!_[hYN&>]aue$pd .Di1d-ppg~yvB$u*=D,CyMQ-@' );
define( 'SECURE_AUTH_SALT', 'Do  Y=A72mk.M;I)p2aByAI<#<9yjG0qgP[`0tkpCgep6UVBfk`(OiFJ(L9xu@Bu' );
define( 'LOGGED_IN_SALT',   'O<WR2`B!j^+e)K~v*h,bWp4I>c<)R;n=-),IagVyuf Q!K)Qd_3`?1z<erNZm]Lf' );
define( 'NONCE_SALT',       '?${RFHQk2$-IiW}3={#7zTIv;m2Ei%l_BZtuEw)CD,,6$BeJhS~agnb,mcu0_y?^' );

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

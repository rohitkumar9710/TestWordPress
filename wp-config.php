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
define( 'DB_NAME', 'Carcaash' );

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
define( 'AUTH_KEY',         'DLbNSlcjxiDrk?B^ :U#hsb|@5Aer^JrPCCA7R2{9<qE`%vRY`55h4`6xao>q 1F' );
define( 'SECURE_AUTH_KEY',  'bwEc=b=.)lU9%t_oLH[RXaecTzFb;%<M!j^j82nO/d?=_Ew|G4cK[&%$v5$~[)yN' );
define( 'LOGGED_IN_KEY',    '>L}p|J*X/[u9Sa_(pM5U-kboEnkKRT8XU9a;PnfIU>KXlO S76-N~`*o8D6(b_XN' );
define( 'NONCE_KEY',        'b[N L +g[[$NYc<[dD3PlLCULX&e(F9+pP),xX$6Rvmq^)Mds(b$ was9*/&S!e@' );
define( 'AUTH_SALT',        '?LuHJEu-71pCDT*P%TEdRY?[|IVW&: ly<THR2aSMBXAB{SZ[[A={UH<Uf`ROk:z' );
define( 'SECURE_AUTH_SALT', ' Jd15^su-.AMFsE0L-6uCqC)/fzK-=puAKoXI<)f#}==5 qLzdA<I0]&jx`t~SUV' );
define( 'LOGGED_IN_SALT',   'C27N(IVA}Ti3`ALpW`cf#~YsULUH:d)$!%Oc3F[Cn<e8l<#Yiber~@dA}Giv=uEm' );
define( 'NONCE_SALT',       'RHErg[wqStP@4R5OSMG*Pf}he2.Tp2|Y@&z@&RYh8kNT%2(bP$|x4I{Y8PtMJtOd' );

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

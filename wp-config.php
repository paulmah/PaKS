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
define( 'DB_NAME', 'paks' );

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
define( 'AUTH_KEY',         'VvR[4L6Yu8NV!L7YiL{WTr2$W00Ib*s^A?CD4!}:KwvE/9xE@V5ZsGGBHv`8txJ[' );
define( 'SECURE_AUTH_KEY',  '-s>>60$UfN6kEi{k>UmK)EcCk1Bm_^@IasSkP6/4uO[QU ](0q=igw92N$)chv,l' );
define( 'LOGGED_IN_KEY',    '+vV#{|8m:qqB0]/@fos8yxs&1i1)uFUN}qQc pjsVWTb`,jS()RT:*!A]en(a/bn' );
define( 'NONCE_KEY',        ',TC^pU38tM~zc^Gd*(~kveEKpN.9Lsd8>@xvtKU%sOpDka4O}wrp_.Je.*[^T>?0' );
define( 'AUTH_SALT',        'Y6lb5/3?$A4,8}D<k./Qr7ixa) t<WVn`v79`IOi<{`g11)KwEL/aVi7:BXP&OCk' );
define( 'SECURE_AUTH_SALT', 'E,Fn`[$l6bjFEFTA/m(eS%aP;pa7I@ko0:*ZJ!~zlL:L*3($>s3sh:,I-dS6 M*w' );
define( 'LOGGED_IN_SALT',   ':EZH/Grv%mmF~2g?S/RaJ;.0d#`_MIY%p8_~CsE%ep 8<}- p wS YIvjn~!pJ;k' );
define( 'NONCE_SALT',       ' )L2Kr2k:.,Q-);jtPaL-C@yhqtq3Iv$^<Uj@&W>A?:{UL?FLl!Pe^la[2(F;uEa' );

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

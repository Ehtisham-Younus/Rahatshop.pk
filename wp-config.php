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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rahatshop' );

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
define( 'AUTH_KEY',         'S|It5)@*K<w&szX9}Z6/r[hJSO6f{l4u7O6T4]Nue] NiPpj9@ile.A2Q&UORHwh' );
define( 'SECURE_AUTH_KEY',  'FS?x=m+f?@p]#hn.0L1ic[xtczMH.BQB_F1Q%^7`JXj|ucun!5)mt(XXBo6z?>dw' );
define( 'LOGGED_IN_KEY',    'kc9~TbAPwmKc)SdvF{0d.Z:QjS(6RHjj2_^|tT[6Zkm21MZu$L@7u/(yUlFouK [' );
define( 'NONCE_KEY',        'xX+^R`tYdXt*jK6U!tBtj)ulYFbcld(VlyLW<2j[qBORG`a;Y)OA?8yLNTW,hvRT' );
define( 'AUTH_SALT',        '|V6X[%SgSh;6UAtjvx#AUNxRyF?sV5;k@^RwyBb@$|(YFOh:Fa_zD=(g)+/0fUb|' );
define( 'SECURE_AUTH_SALT', ';AnDigh)%PsmXrkAF<wFw2TTi]Xv3c&{Pli^O?0~M3<m~f/Ibs+mV7.ipxvYzBw+' );
define( 'LOGGED_IN_SALT',   '`DrxA{/GOp_3<7D]IcwR26+v^?E%!ou&EkxX:~e(Y|[iOp<KrkuB~@cbt0$gZm$_' );
define( 'NONCE_SALT',       'Wum7A4$]ePywY,5?>9T?R5)8 cF/}KP!gi4!-:z6%o~v:vk]D@Kw,:czgX>2N@~v' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

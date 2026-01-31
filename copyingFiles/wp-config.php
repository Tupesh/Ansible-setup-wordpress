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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.56.16' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Filesystem access **/
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#^1<e %UFUx6&77+RFl7Del^jZ)_}1*UNNWc03oTA5T;g+leEW.]kmox|vlNqaBj');
define('SECURE_AUTH_KEY',  'knX;h/H8Y8DH-T0Xu5iY`el#VbD(ov`>zJ8O>)}Z;68j #KJE4gpt<]o/%C-?~D$');
define('LOGGED_IN_KEY',    '8+h|%CdMe/l-kk?f3~DWqI,6r?+^Q^|QsY^{9#!Oqtur5+8|_: f;++Ci@wZZ3tf');
define('NONCE_KEY',        '9.KVa,-N}-Do(:+;OKv[.=n*.:`8(_0~H0&j)xgw73lE+Shkhzl(.:Ki+Du1rq10');
define('AUTH_SALT',        'ROh&eu!Xw6a +}dhX0;!JUf8ak3bcGGo{Xl^FCT`KOW+`i.KZW2;ogBe8RYPf-*>');
define('SECURE_AUTH_SALT', 'e|yl0bFRzxu} ] 4 >[3 9{+ZO63y0]dgFkOFr!|<^`E[:5>Ww0v5/y-F6TxZB^6');
define('LOGGED_IN_SALT',   '[n`xIl!?P>.Z+(R`%2K[5E(7!+!C(HTTOLd+:a.kkA[=@+/-<=+<kZ_%b/7.,+qp');
define('NONCE_SALT',       'a&w9Le)/r<xG6b/=%~K[e>RJ:3@F<xxIOX)(NBF^vbC?ue.M*3h a9F+QJ<AG}5X');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


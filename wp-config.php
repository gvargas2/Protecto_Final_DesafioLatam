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
define( 'DB_NAME', 'proyecto_final' );

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
define( 'AUTH_KEY',         'VkbtsS(G cqkyryqrv`Mt~&py^gqkYN|:IyR;4A_aYyoc#j8&kiBuq_1`l_2835D' );
define( 'SECURE_AUTH_KEY',  'tkYnOzG?SW/:L+m1l(vHt|<fcU`m?2-ObD@Nb%r-Gs4^o%RbCt8I|](c53u0:LqH' );
define( 'LOGGED_IN_KEY',    'c4=&{K^CV2P5tmYa3y@v+EX-&O:!&K HE2.wg<LzxRX/.|3i(na{GuK.ytDO+pI7' );
define( 'NONCE_KEY',        'nE:-Qn_;XPe]7<m%!{]E--;XGD1|C+&!M:;(%Lvha?x<]6w9h<EEE6@Fbfr%u+6G' );
define( 'AUTH_SALT',        'KAKW9FWuGF6P n6z+`nQv] ~5#emwGX$<pg8 ,^-[+yY:ltCG~?eI/XD4N{jQdp$' );
define( 'SECURE_AUTH_SALT', 'Rsbu0~*e@x<cZOxV1d.i?a?nD%-[_.Cwq6Dx$[isaxC&DClw&^O,G=)`QHAAj5dV' );
define( 'LOGGED_IN_SALT',   '3^jB:BZT 9`W9vY6FA8^ENmiT|/d52.T+MYErph>glztdND8/TD^/{v.*$pABmJ;' );
define( 'NONCE_SALT',       'z<^_:/Ml[djq>v?Dm>^%{,Isd;Q-[h-eYGUuyE#XWZYb11DD)pYMcjj9=?1&Qj8,' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

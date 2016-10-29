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
define('DB_NAME', 'wordpress-szablon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '32g0blin32');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ATed<=3Q_gXfuw#cZJK3.]Vfy5=|7Ete$9oo`,s&}%2BKo8@Z:<?tBoDKDuKoERT');
define('SECURE_AUTH_KEY',  'wSQDbO?ySx,aUgZ>y=uTLs(^ag^NGOcatd~MWiZRoyR$9V^h3<I]XSSA/#AUz3ex');
define('LOGGED_IN_KEY',    '*cy4Qm)}5ywhwU#94X]B$/zPud$~p)C?.268k/z+q^JMA%T<{YB#8r1}7VX1-Jpb');
define('NONCE_KEY',        'Q_Y%C@h=PybOpU<gtGDO,0V01tyI_+tu<^}>BH46(+sDpSK%`=cF>u~pxz.5>!4#');
define('AUTH_SALT',        'gs{M{MZ{wl1~)E#R*w<SP+ayz+dik5?Oa|&?*(SQDO1!&nMz;Bt{jqih!}a 1pN1');
define('SECURE_AUTH_SALT', 'b&mkU[UzAs#Qx5H`ig})PQ1e %$Ca+,P<kUFN( Ehz_h`JP,*%CY[kXq_jeOjks^');
define('LOGGED_IN_SALT',   'UQ#Z~s-tWS&Jz4ULsGEHWiLQ=WO^AkJ)w| +@-Ps=jKQ>MdD;(ptuvp0v2UVixa]');
define('NONCE_SALT',       'To.QfX&;Ws!/oErj]Xd5(RUY9;H&&x 9,/=yE5`KjdtKW51hB#Npd3mP )QH7O[]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

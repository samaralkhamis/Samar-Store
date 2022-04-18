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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'L>{IUn3j(AcSj<DT`DH?L?<Upk)OmIE ZW.RWKbkw#L{(~<#Jd?&emQs:Cgb9vJr' );
define( 'SECURE_AUTH_KEY',  '2Ei}2]E2&oRVifA7w>a3a&@HJps<GxS_;HT[S<jKTi}lZL>LGk7&VL$[NJ>UVewa' );
define( 'LOGGED_IN_KEY',    'xB)//~r]GzK0D,8hrU*#S!OND6@XJ5=8ejpQE2qNDA#aU2 $f0c[wb)R,iG(R>n*' );
define( 'NONCE_KEY',        '[ ,r%p;V@+EBv?Qy-O5)WEP?,@juGg>]}|<ZU[8hh$:vdz##4{QDYG5bG/e_Hf6M' );
define( 'AUTH_SALT',        '|sQ0d#rOHr/N)wQ+Wa.U#srAT<A [hVmoD;LMBomIx,/`((qpG{U(r^QV0)6rxB`' );
define( 'SECURE_AUTH_SALT', 'u5e==i_/slq Vk[/SWN|4]OcJ.Y~~R#S0@B@x-3L9:zf*wGF>cN~HVN^K=je`e1v' );
define( 'LOGGED_IN_SALT',   '-!>Y/43:B{J!^:8f(`m,;D)JYy+$TcFuwT$hb=5(H:x:3<W.~$ov6vW} =[f.JBB' );
define( 'NONCE_SALT',       '~HP,;ghWj$esbJ#LC%g8 :H}X{L!&i XHJg4`V3@}2?49)BsF~So$p/[XGL=<&?E' );

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

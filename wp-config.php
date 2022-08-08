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
define( 'DB_NAME', 'healthservicedb' );

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
define( 'AUTH_KEY',         'A[+;j7tyt6?3:r,MrnGCX|B)yX{4S(>W_IAM(e}x1^(d-H~fb3:^Jk=7 NV`5Ha=' );
define( 'SECURE_AUTH_KEY',  '{op1iOGNyl-x*2_%> _rBdlHrWr#Ipv/ *,!$@[h5c;.`jd-|{3t2=%Z.-=F&j%d' );
define( 'LOGGED_IN_KEY',    'Cure!@ 0i^PM|+%LH<0zL3:hy6wD-C~O/qxV4;$Nd-Pl5b2f<83Lupd-h9_^]&dB' );
define( 'NONCE_KEY',        'D%?S_K/k(:6w.nK!Q=gQE%R<)AUf)Nk9*t^)G7B)VS|XiwL?-V6GHWX2o<^~P&$D' );
define( 'AUTH_SALT',        'e,annC#USg%klY,,3((!YQqEN-r*c:<SlDGHp2>#tFI?kL}6>aP3_~RL)AWL|)|x' );
define( 'SECURE_AUTH_SALT', 'N=g=3qb.n`]&mvs( .[&pGiP>)%n)TWKEFyRrvYeXQ])6x<:JbH:~]}Of~e|cW?l' );
define( 'LOGGED_IN_SALT',   '?M)!@5FaXEVm(=M]M[@QI&y<MTu/{IVk]5T~[|v-xi_vY_<YsBKr_Z@J]eCRdX;y' );
define( 'NONCE_SALT',       'Ss0z^sxA;ldLi|.IzvUCs2&:T4Z[T%iW$n2c#}*H]C=>i6TT[Ep*Sz-Zu7<ZmZ]{' );

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

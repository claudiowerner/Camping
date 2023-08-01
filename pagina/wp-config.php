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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'camping' );

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
define( 'AUTH_KEY',         '_EfkHV/SU6ya@pijSX@7SMQO i6^3!uC%ofw~@U<GjDIX!M7P!3GgXnQnq0Y|Zqp' );
define( 'SECURE_AUTH_KEY',  '^.N81.OU]YZ-1Cc(+RJ`[@ELj{Lq=+U,Os<,9D)Mz$?2#;O*Hl}Xj]C |@K=8KwM' );
define( 'LOGGED_IN_KEY',    'Cct)x(J$|ImUuy1H3xLztI8BSVG0C &6?9#%aEAiO;eyP@<PBg[Y(EG3Y3}1N=>c' );
define( 'NONCE_KEY',        '<y;x+=tuC?`[E O[6Yb9!b&{O3qY978,Rn,X(hbYN|1:%n.O<*-V;vo%xVF3SFZ$' );
define( 'AUTH_SALT',        'aQs!U0p+c Tm$;Kmk!]Y!|p^?tc0nr*AO#i6t_;fYJ0=zMM3B%BQ?J92KOPV4j)T' );
define( 'SECURE_AUTH_SALT', 'X$8SIvoeFF>NvS!elU/mVQW~b1:W4tWL$8dGohV%O.O02Mf8 o!@kXAKQs[Pb9hy' );
define( 'LOGGED_IN_SALT',   '}(_1;<?#Eou|Zv!o3[05Vb*ErH.?e|G;*3:0W`[#{q9`3GU5*g3/{``9_TwF?cC ' );
define( 'NONCE_SALT',       '3P9G}#Ix5@b9VE!|Z(kqviRE`oJ%dRUs|5^1litCu*A*H/ajZC|r~v~<;.D@|BFt' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

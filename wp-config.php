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
define( 'DB_NAME', 'hanert_dk' );

/** MySQL database username */
define( 'DB_USER', 'hanert_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hasdjasca2' );

/** MySQL hostname */
define( 'DB_HOST', 'hanert.dk.mysql' );

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
define( 'AUTH_KEY',         '/7_uH9maJ5uFYIktu3.F){MBTUYb~=Yy;M1u6jsu:Emij;1{0rAx<m6D d}FBSti' );
define( 'SECURE_AUTH_KEY',  'yMR?[oV2SM%+T!t`k*epOk+oi$I Aamq|j}0@|xI8a|K(,40>!WR3hHT*U4FmR=J' );
define( 'LOGGED_IN_KEY',    '&&VVqhWa3}:V**Q`3|..XW,LJ~VoN6iP0=OpB<T8,#C?JEI%e]>JjV4aQwXV,tH^' );
define( 'NONCE_KEY',        'lH</!/*&|YQAbhj{~]{c)6_iD.)gE ]PG>@bVZIS}^|XKX9jkH5qr-igYc()YEA*' );
define( 'AUTH_SALT',        ':Dx:%WqrXhMN:@^@f_A(gAg~gL~sx,EmYFqk0YRLzsX@<EE1Ap:YaX T5wm0m8hb' );
define( 'SECURE_AUTH_SALT', '37{EqjNXu`}fzb3Oi|*pF5ci!qR3PEwzkr<U|z|xz58-_RIVuM-@NH7!Oc0=|2 $' );
define( 'LOGGED_IN_SALT',   '+v CU:B3yC}^Y!xGes{!#ByhremD})8V]h/UrX{T8g*AGx;S6g4PM:1r:,o]*Xy<' );
define( 'NONCE_SALT',       'WJpR7|elj;&]^+!rh{wexMgy-]!t_5i*Tc5E]a=gPQE,|0r)c1TY(=n$f$R[GHG*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'limitedwatches_wp_';

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

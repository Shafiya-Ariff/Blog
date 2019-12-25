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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '4QGRL95]dG!Idi,wo[v^54V3&k!]OZF+qQ[#>c%]VQgSwYhw|SW=s`E,nN1V;VKi' );
define( 'SECURE_AUTH_KEY',  'UCy;)vGfqz0 TRn?Xt>{&MP:OdQVr*?K6LE(,R~Qo ys.]M6,Z70~]PF_c.vqK]U' );
define( 'LOGGED_IN_KEY',    ';hJTO|.ISwt[}4GY^g7buDG>q0r4cY`X(R2A8H0oPk@jO:x|dmroLm<dEmI:4:)X' );
define( 'NONCE_KEY',        '([O5Y.$d[5-NOG{3s#`VW2!j>P5(|gx$?G`w*~s%:^|gKtK%]78bnM2{a)<t;+jA' );
define( 'AUTH_SALT',        'T/^8~tGfXZ:d^j7,9qfo]mSTRBkor88-fNU0?8asTN@T,!aCL7iKO-N?e0A`;fvR' );
define( 'SECURE_AUTH_SALT', 'B=N!9?2!N.1J%3q1=djaz`Mm17>HDYy9Wrfm11?h+)8kTz Ex:@BMZ:XY$Ata(Oz' );
define( 'LOGGED_IN_SALT',   '-d%57HRg_{};IfpZaP4SgywxG|UcGW:O& j*2t/FJ{is?umAr}AD%Y|Hd.)R~!y0' );
define( 'NONCE_SALT',       '{!l?P+s;>l9s[/88d;[g&y5cn5ddi-O4[^[10;EZ]$w=L5p<EDq5&9BnYr&>S=N$' );

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

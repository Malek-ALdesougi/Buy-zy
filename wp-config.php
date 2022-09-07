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
define( 'DB_NAME', 'Buy-zy' );

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
define( 'AUTH_KEY',         'S^&,[1?M ;#6O}-M%i/jO6G+*:= lJy@vcKN1%}q{)L1&-b40!TN,j}?kqq(A0gT' );
define( 'SECURE_AUTH_KEY',  'xk :Tk~^hB:cX[o^_av5(|1mrR2[b88.5`esi2W+Viq#SS_(-e$eJU9K8y%K3)d<' );
define( 'LOGGED_IN_KEY',    'isLg;Q }W6+[ZZX|UL%G{}XsE0}D!nD^BF`v7MnRH)rW0E20>/B<jqq>d@0Uigd4' );
define( 'NONCE_KEY',        '{LjP*KW}#4|#ocFcQJ)2| $OHl@lh Lk?#NG$s!,WEFCSri-.$Th- N>8,1qq2vp' );
define( 'AUTH_SALT',        'gcqZPTNSgU5#F_.{AFhh*iM;-9D{wF`!f/DT%#?iSfKMZcGQYH<:OE/(6O%Khwtt' );
define( 'SECURE_AUTH_SALT', 'KAjvLS @$Lkr]Pgbs>WH:rgv:l[]0@i5@tI?6}uQ @+apQkHV,(A(26`N7v3SUt[' );
define( 'LOGGED_IN_SALT',   '7!h0+{U[TEgaYxo@amko8~tbDL[h(7.]L^]%^twN&(-+Z[tI&W&uYo_S]];/6SkL' );
define( 'NONCE_SALT',       '-|C]iJlQ=HT*l[y4`U}z,{VDzgC!t Y{Uw;s+z9s^`9w Q4`52{T~z.BeP_$*.EQ' );

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

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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'gy_^^[BnWjNW>zage#a&j{^Q)Fe@{i=VtNoqQSh4:#QCyAZH1UGIZKa.lrXd6a]$' );
define( 'SECURE_AUTH_KEY',  'XKg74LzUJJB_D0!1K**~B+1XX!R_DwL#>^N3*KS9uc+usd9rdWMt[B9>*]vOV,RT' );
define( 'LOGGED_IN_KEY',    'by>aIi$TZ4D1g)BEG^VK>DAQP|%?HzLnN8#q(=gBa(x}i*P*0NXUbB3r-p`=52B;' );
define( 'NONCE_KEY',        'be[vOmE4U:cca2~h X t[KY54fyv~8qil*<j-8gRUt*BszQ9<Les+ra/A9!QgS: ' );
define( 'AUTH_SALT',        '?oi:(r25:c:c!^|7GqCksnY%S;va@:vIT;A[_YG9|=J`M1tX34@Y%l[[5[c[o>Va' );
define( 'SECURE_AUTH_SALT', 'vXg}pdeHsZ0KRjv+;ObiI*&b)R+u9??:(S]DQ)v0a:jDKH838 57,;9gKjDN*<S&' );
define( 'LOGGED_IN_SALT',   'Rnfp]7sK)SP6J$Rc`D+q2:h)BsIk!0;^Jd$F(XyAyQHFpoBz|<R6B:tj|$Q`l>:X' );
define( 'NONCE_SALT',       'Qxu[`1!(8aYwh1;8&n9_w>M!>7.p=);V99fyjc+1+Q9zq+^Gb < O`LYGECSH22j' );

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

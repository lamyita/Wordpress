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
define( 'DB_NAME', 'projectwin' );

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
define( 'AUTH_KEY',         'E3Wz@RciUvrV8apv(-pPM929UzOfV9;S]~P1qozl#CY}MyRJSpv{juw#u!50E| H' );
define( 'SECURE_AUTH_KEY',  'Tinb+FfaCm<-o`?^*JtVwN}dZ,sxO]O4_m@v,jhM{;Lq``HiM4UfuVI=m*8T0>dl' );
define( 'LOGGED_IN_KEY',    'NXAh^cM^mnztLI%6*1=Z1<i9u%t5w9ddV{eR>xrNQ:Fx[4AMwKoP^j=&a,dpH;+m' );
define( 'NONCE_KEY',        'OlhqqbF3T[_)1Ah5]c[++mlZm[lkX$;=r6O(VLA2j(}ZqUf1az)wZ)-!#wqQvaC{' );
define( 'AUTH_SALT',        ':1I_]0}Bq,MCIfcE0E)hTcxM7*??%1-CEZO{#H0a]0ZlCHl1o8pq?6=$GSXfy&#b' );
define( 'SECURE_AUTH_SALT', '(`qM}tpteAz3kXuqaQ#~Rp4QUKxQxV)#[U}-Hw1wa,)+pVN+8)`sTk4YviJkv^R;' );
define( 'LOGGED_IN_SALT',   '=C`XKbf@!eH^WO*+<__#Va[$e|;OrPr5FzP#m*8=bPp9}jS%5C.)FR;!!l3<2#Y2' );
define( 'NONCE_SALT',       'IWD3Y~q8z8v>4cxdW |1G?LFbWf*(k3!2Fes$FxSaql^aqHzY/q}r%q;H=d-C<>T' );

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

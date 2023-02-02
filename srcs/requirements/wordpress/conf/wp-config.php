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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/* default db settings */

define( 'DB_NAME', getenv('MYSQL_DATABASE') );
define( 'DB_USER', getenv('MYSQL_USER') );
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
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

/**#@-*/
/* insert keys here */
/* my own key!! */
define('AUTH_KEY',         'LFh{cl3-GA?G?&{_ARfStG-@Ng|%T(<5jr|T.>#h[9y{+|(7MB+z</mDI|d?>?&c');
define('SECURE_AUTH_KEY',  '_g7Q]S|5{[A;GFJ.>Y_A{bNqN&_vdfzRZ2Ncbth-WmWv+a <#FSg-)3 -&:f%+HN');
define('LOGGED_IN_KEY',    '@i}=+5-gT.{}80kJD#zH~z$KQ,#4m0MJ?58e[/]HWRhn]>O^C49RL@y]>%.aFD>b');
define('NONCE_KEY',        'b-X9T?GBT/++^CJ/83=9G=nZ7p|-6wEnG@U?R*D% |ypgxJ2sD~SDMDUt1j01Y0r');
define('AUTH_SALT',        '|pjZQf;DC>mgp$Ir&0Q%Ih=l>?2rR`i{tIEomg_.X*B>m>/e:fEYSMqnks3)N*4q');
define('SECURE_AUTH_SALT', ':-lOkgjExfIUj<.X`4+1Ip$;bamrK<g{3wg8ym<yeo9,DzRjK@7W>k?mC9c[I)2X');
define('LOGGED_IN_SALT',   '?&*5,`i|vNcR0W1D+&tQ]FwQiI4_*q-+0m@*yVF,7-%cjB^&Q{5^VW++&vKx`I?+');
define('NONCE_SALT',       'Sc2%xwSY&`Y;@kNu#2NfvSe-`vKbLDOLS0Ilvx;.l5k94%iXB(.-HvD_A-o]o`.|');
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

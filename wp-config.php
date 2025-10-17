<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kindaid' );

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
define( 'AUTH_KEY',         '%io1P}~/[_GH.gGqJ/`9nRBz<5fTC!AsfWA2vTD`Tmj/m.ei&^HjZQ)ko&DwlB&t' );
define( 'SECURE_AUTH_KEY',  'E~L4AB2H{J:+xgWy4RfRWb{FKxkl,;$?+9y3tmyMtm9*>vk.TY^Az|VY<leYq#Gn' );
define( 'LOGGED_IN_KEY',    'mVdK0m|=K(0]<fC*>-,Di+Jn|FR*{qg8YIl4HhR]E`{o*x#S_8:{c~z%]q4/_L)e' );
define( 'NONCE_KEY',        'nSqS0twANl,wzJt$suu`w!f!YBq +[)k6<o|T]X*0SY4@A 09?6hFUETBA9Lm{ME' );
define( 'AUTH_SALT',        '<o&!3}fTJNlIWjzVYU|A]m+6]VQq?q{*4 MvcI(Rw/bO{s&+I@%t F2yi$dQ0v4)' );
define( 'SECURE_AUTH_SALT', '.#otMdk-q_})!.2xFD<GJHg:_qW9DcRSpT3sQ{{c4Qx2A|JL~^Mm yQ?,x:Ya`t|' );
define( 'LOGGED_IN_SALT',   '? &uVWXU(.&aSbP=ACBS:^xpjsJ=]tIeArpiql }|@hs9 &Ni.(CX=l!%0yLEk,!' );
define( 'NONCE_SALT',       '-BTB<48[[l`RqoaxLUA<HLMG+P#P9]GJ:^moi)z&<bs#I?t&?}2lV2+;,CaWs4@b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

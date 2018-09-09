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
define('DB_NAME', 'gabriels_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' osO#&7-6r=!qN c H%l}&#gvgWCN6.7qXjY]1I:R]SrXW.jwG.QXGy%NHJAma>^');
define('SECURE_AUTH_KEY',  'hQnrhM&x*`6#pWOH@0+s+H2x|7k;ih2.EB(&AQv7cuD<r1;ZhYSM`r*KT{VT, /+');
define('LOGGED_IN_KEY',    '2NIL_+:g7n)X^@P_Ho#fMu-C^q0MpE<Ig|+8S3EItE=OC!{z%G|dZ:nWM}`&Lj3S');
define('NONCE_KEY',        '*HQX/YvLT0MP$*nU/KFY6FL@ooLn|UDZQ3E?gd=Q<KQh:EA dKfd3>;AKQb$^GkL');
define('AUTH_SALT',        'Qd#5V{3MbR<+c5-BpE51keCgFo8u:z[3EM8c4B=J{99#n:;,fV*eo8Yo]W%9wJC3');
define('SECURE_AUTH_SALT', '_GkR^*fYj,N5M5b[)_lHyO`(PzXqGNm,t4UV1N*}%jfHmqGV_ClLM<pz54bSGar(');
define('LOGGED_IN_SALT',   'Ucq.<>cp-EN95`#8S)H,Fa:s0W/M<TPzI|#hmg9(%0,,0Vc<h!wep6+&u8R^v-!t');
define('NONCE_SALT',       'krUh0>i>3(~zKZ<pZr(fQk@*fjo45MG;[G4 Y*$?[D/%#/iq(j_&%.sbG@/;EBmP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

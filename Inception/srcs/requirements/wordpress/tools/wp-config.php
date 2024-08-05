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

 require_once __DIR__ . '/vendor/autoload.php';

 $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
 $dotenv->load();

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_database_user');
define('DB_PASSWORD', 'your_database_password');
define('DB_HOST', 'your_database_host');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'q,VrMu@W3N$8lsY~K;,&~}+mj|}PjcUdh)H0Lyk+jII0/ Plr^HP*(~IA#p#v%~p');
define('SECURE_AUTH_KEY',  'KoGFkg1,vS+gINeNrx*BjS-xl#j[/Pi24PqPshVD?rm.`F*+}me9*b d[F# l.qR');
define('LOGGED_IN_KEY',    'e`{ub-R1I+7_0~$-wt6/7!},}eUc>Qwt#^?R[DUM~hfRDSnOz-LLc>z7s&!U?PMV');
define('NONCE_KEY',        'h<F3U;b@z H>[+=/+Qz[e-eB5vw>>1-:{9-D^<perg futlYzO:a;R!COqggpM+Y');
define('AUTH_SALT',        '>eX1*hly+,!f<<s1icTyla|MQi*|#_n{auFx+;mfyAwM[deD{w1O`*]BobEE<PfT');
define('SECURE_AUTH_SALT', '%uHMhw~C/!0L3h2emJ9YkMER{Ua?k%8/|ZNce!5<XM6?Q+)^v6ex):t&WxIq+@Pi');
define('LOGGED_IN_SALT',   'nD*TTw#tk+uO{@sZ+YOHN`&*kuU@NMVSk/419Jr,,%Dfl-g?YdAi;` vW3N1FPs/');
define('NONCE_SALT',       '+f=j&zTc0Pv8#kZKbQ96S1U!& <_tuapL!C9n_^Yy&$2Q*,,`{x2~l.?q#ZScOF+');

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
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

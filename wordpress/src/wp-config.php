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
define('DB_NAME', 'research-1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Vcs@123');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         '$2Z2H;NhMdcIM+!yx0B{]t(0E/KATwzwE^I*K.89R[KZf 22C5Oj|EIG=Px_m`S[');
define('SECURE_AUTH_KEY',  'O;LcQF[9PQ|5~Xp[kFjbn-0JM b`{=+5L7j#]2]/uVkYV?KvzFY7+0pnJ>1L<AJ!');
define('LOGGED_IN_KEY',    ':0/mw%&+|)zk1zrvIdX45Yt7C=V^,hPKi YP-YR*reS/:2-c;[?]I2/0mFC+1cK/');
define('NONCE_KEY',        'BlO|~BhugzbN84eJI3hYDwv?!2j2IJgoZ}oUw:t-Lg^G}Ru{ZWj>kz>vLAU>{dzL');
define('AUTH_SALT',        '>7]]n[XM:^;<gh7iU]QyxcIP?aL-AgD]S1h!Zl~A`P]0o{M=fvN$tn<wjI8ua$5K');
define('SECURE_AUTH_SALT', 'SFmJvzh/v:>:=abK4 rBh(?*f>^e+pC%0)Re%HPm+Y}z48e-w8t$9Q;LceI0`<%s');
define('LOGGED_IN_SALT',   'gT!FHk.#|^W|kkMFn_w?VWZvBuBEZLY?2[>r~E<rt^n{H-> 4PO1K|^U80JCFvA!');
define('NONCE_SALT',       '-^;U/SyR+pE_UInyG}>j<0$@N=]c<fg>l4-V#@!Z3a: EKMnVk92L<FrH|ix^@Dj');

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

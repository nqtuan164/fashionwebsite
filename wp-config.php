<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_mixxo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'zH?-B0v*.67kQ?;xH+$W`t4$`]{N //J;%H%dHK]Sv]ku~2WT/Aj]r5P`+0S`n+p');
define('SECURE_AUTH_KEY',  'MQI9DU,kqb$_4_O;w_Dr~5Y.S&{HfqyAF+0nF-E uCaqO~7eGUvF|{+F_`7[}(=o');
define('LOGGED_IN_KEY',    '(oux#F%k1YZ3o+{SnZ>|%yRWy:3nP DQ[4N7aF@1:}?<:t:u%-vvr+c|v[N;Cmf@');
define('NONCE_KEY',        'C37hd|9Mj_>C}*o%IY$xw8;Pp63v-#@C^fWP2Y F,~Gl+lmkT|0x0)PX+e-$UU*H');
define('AUTH_SALT',        'N![=N%cAKpc`S |VP?mjLe-|+,+.r|O{a8jP#1]N. adcgKXK|{>)Pp>*eGL+9c0');
define('SECURE_AUTH_SALT', '*qk|Bcv]a[7Ve9[KZnD4;|fQ8|p/s$/JkwsyTrHmVdwyq-&u>56%g_`[B!Y`is!K');
define('LOGGED_IN_SALT',   '^qv&XwCSPmOJK[ ;F|[3Yg1yJV|6>L$5Op]V2zG:v[{]sT*>8oSen _pL M+BI/@');
define('NONCE_SALT',       '@^&DDZ:TGqBc+&f$/#2xX,1R{T#yi!;O0sW ,l_*lZn@:74>,NrEho{|Ny)N_@!U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mixx_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

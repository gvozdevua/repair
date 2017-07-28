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
define('DB_NAME', 'repair');

/** MySQL database username */
define('DB_USER', 'repair');

/** MySQL database password */
define('DB_PASSWORD', 'repair');

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
define('AUTH_KEY',         '#o}MR4UUSU.&]R/xs5_0}.hpd&4jiFT`,L0K_zwe/7Zb)FDJ.p5B%=N(_H5e$]|v');
define('SECURE_AUTH_KEY',  'EhGOzT8`Q:%w_cDH$P6}6f3;T>f6Hj8 )nc&3u10GL5e*O.tQ0%u9j`<:<<daG*l');
define('LOGGED_IN_KEY',    '50kLkz}wx*!N~n2=1<[^7[;DiYy7tNC3F%)4t^t(beW~/!w5F82|J/Eyyu=Vep8`');
define('NONCE_KEY',        'QpPE:5<},E`()]xl[%.r6eT[]bM4pE>gffsAR@})BD-(]hVns;Y0-RHr7*DP&*%4');
define('AUTH_SALT',        'RXZ<CjN%4xhRsiUl Q_Lq$A7&HGgTmd-`g<]FNF},@YZTL<NURE*j^VXG*9(:u]k');
define('SECURE_AUTH_SALT', 'j6)Vli[ohcq&U8fc.+hDR|Kjhd1Ri+9fy!}^fK8nf6CKVJTH^,Y/b|_I}&>= diU');
define('LOGGED_IN_SALT',   'H;zYQC KqX{>pXRRmBP_8Dky,;o]]3$FBBU5w?6/u40)!d:+9Ykz8b.lO3,iCA.#');
define('NONCE_SALT',       'DyJVRZHOY(M~.>-_oM1~|5KrH`|{Gv9_rw@.?uvWw[b>fVD(DF<T;M!uJvm`LF2l');

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

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
define('DB_NAME', 'wordpress_examensarbete');

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
define('AUTH_KEY',         'GDP)14M:,-[KR5F$lE}0uj7:m@W;s.`H3[DV]8gjDh)+w6`Z=w+GKV`lCdAswX{T');
define('SECURE_AUTH_KEY',  '[m#V%d*nByEdp(J|UpDnrbs 065f6~+9_P$@`sJdrjR Z|bpMYv-QndThO0+nu8-');
define('LOGGED_IN_KEY',    'K^`)s(s#lY8+)JsYrvGu#k/9<`@n,_egTKM3IfU&X+J`3zC-Bc*l+9t,1v7pL?;j');
define('NONCE_KEY',        '[#6xxnru48alh.0I#[Por-P!rtt,F6g~U})sH/[k1-l`qV6UGpxrnDSmo[n-/ s@');
define('AUTH_SALT',        '4#|n%1`0V-#I7kyLrqh?!-Lhu^^)CYu%<1q>v9$irza3fCGIQioC=YKo h~9r2wp');
define('SECURE_AUTH_SALT', 'EmQZxJS%l5YYq`EmRRy5{ bDv(TzqJnKT+Xl$zSUjbnvN<0lO1{r|J^JxNXnTOiV');
define('LOGGED_IN_SALT',   '^fhE8[x=N<P*<{d{;i13n:&4!K.-)n;#Gz6#l=S<d+i^@yt1!3>TDx0bG8TzXE?u');
define('NONCE_SALT',       'yo^5}8P=GJuUV?#- *qHO4,5j~-$zj 7RX~M&V0g&MwLh@8)Ml~Y9U&X/IO;Ah+0');

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
define('WP_DEBUG', true); /* default: false */

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

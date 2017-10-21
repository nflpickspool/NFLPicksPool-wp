<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db702371096' );

/** MySQL database username */
define( 'DB_USER', 'dbo702371096' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Youbestn0tmiss!' );

/** MySQL hostname */
define( 'DB_HOST', 'db702371096.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Q&$Zp%[keD(f3s+#x$bKg?.Yf|Hwm|BK~+J6tA$aLtJ|Q@(Q9py;k{dNI@+TJOs>');
define('SECURE_AUTH_KEY',  'uzqn9j6WfPYbecV<YGbGT14@*<M-@k~(V$;Q}{-C |g@h`1XUU5vzU|*;:<&tL7v');
define('LOGGED_IN_KEY',    '**W_?AaQFh8VS{R=+N|nM#i-4Fy8g[KN|*zb&4j*c7fe!ua3AC0ERBp,M)q!89R`');
define('NONCE_KEY',        '<Z<r>.kytZ:,tt0;RU8g+h9g#[29bqv/P48tOQ*:hZjZ5sbX8Xy>Zf: ZHj%W8v,');
define('AUTH_SALT',        'P3}0z~@vlZ]l~9d{!3!n3ppJT1l5_PB)YhVA~+$xy;nsUjSEg2/u5Z|{s(85AT0-');
define('SECURE_AUTH_SALT', 'd)tZa-^!`,w_q?/9KC<Ym]v;+dw*a7xmgOeZz9zR:37&8-A45>V`=$bO>++eH6fX');
define('LOGGED_IN_SALT',   '[P-Jg6 c,Etez.!.a:#36&R|}21.yn7.z0u,tjj)1|x*a;~mS.!$/!#2pe4i`tRG');
define('NONCE_SALT',       'bPO-+$!eE3Hk=ZvQ~bEmPS6@!nll+|GOP`Y}i9U.`/JFd!q1&d||G*ALTT|4*!1U');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'txkcG';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

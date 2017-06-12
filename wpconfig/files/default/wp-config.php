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

define('WP_REDIS_HOST', 'http://wordpress-2.tfgepv.0001.apse2.cache.amazonaws.com');
 
define('WP_HOME','http://wordpress-998390647.ap-southeast-2.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-998390647.ap-southeast-2.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.c7klsiwbyifn.ap-southeast-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'w8T]|RmRR_Sb!/?d|b,vn6(/@<Qcv{?Hg2yRF8X_aXaW=5W.`KDT+X|U&XI0{vV^');
define('SECURE_AUTH_KEY',  'Mj]FCM(;6KV<LLK+n)Rq`Yz]TDw_x9{<%|t)h; }rnZp<s6W}(!Z[. }=S%(k7Kg');
define('LOGGED_IN_KEY',    '^I{#o8).x%+lF]@vo-u;h1b_L=1o]@3o/lT/18(?ULkG70 7QvM|GVWkF!O,ue+g');
define('NONCE_KEY',        ']3T*N$k]OihgTA-3vDcK)i-*5+<q!IN(B9bgD%9%{736-4-+#-q1pFTt,Itmc6+>');
define('AUTH_SALT',        '7j``;~)?i2t7b1ZPH(eDPW9yZ|T)^@qBrd(j+JbDSSF lphSwS= 429l! uwc3P>');
define('SECURE_AUTH_SALT', '?_0,hi#)o D>=aG$?t*IKK-rv`|;2cj-o?<W2Y@[~;!U8lajgkp-l~tA2IqD~w7J');
define('LOGGED_IN_SALT',   'iG}k>y:3<HK=,x[,28&.,>{|I-]DV.6B(19_ vKcw=$-Vw2gyWawUNc3S/~-AG^T');
define('NONCE_SALT',       '^QKcPQCJu]`jFbd0y[|#Pwt0`X2B+jqX)d/[3s2O(TBjUD&2jXZldP+$3/bt&&^~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

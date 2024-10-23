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
define( 'DB_NAME', 'thereaper' );

/** MySQL database username */
define( 'DB_USER', 'thereaper' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Novidade@83@83' );

/** MySQL hostname */
define( 'DB_HOST', 'thereaper.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',          'Y32w&3Hr;S[0}jVhWS,&QoRhVC<gV+?kVb4VpLkH1a&[OwWc+ma$+ U5Vu9Xg=;Z' );
define( 'SECURE_AUTH_KEY',   'i-@3B|N5!)v[1c}a<Vo{k%>Q0f_|;<^yjl7,x4|mI&v$o];uE>+g9>Ur+`scVU3H' );
define( 'LOGGED_IN_KEY',     '|MH!jHppf8<s=0C0c%B/l;SjVYl|)V#CLXosR%4~G <y,m]Uoa0bHket_z}sz1*u' );
define( 'NONCE_KEY',         'C{I/9WwAPeR2J.6SLo0gFLcD)=}<lkl4Sh1Szcu}`kKS%yILv>Pb| Dk!kTGYPjU' );
define( 'AUTH_SALT',         ' }mr4-L#Y%i5Nq)fld~=$1R$ahbV=9B&hQj8a6ZiOC{Wz$DIUxCuH:CWc _!aQ$}' );
define( 'SECURE_AUTH_SALT',  'aCeDWT[yceRtRaz]h`ECrh&nsV79cd!5>S&6UD8U&PX}^VVuD:hUCU*+JHy[6$MA' );
define( 'LOGGED_IN_SALT',    'Q+Z$otd@I; P~;yW5o3V+ymlSa~j>w;lr@<np*5@DkN,K)K+04BjlRhz`YC?#MM]' );
define( 'NONCE_SALT',        '/7eNKxu59PEn=h5Az/}rN) _#..8id]Dw=j8Qv,]+Qw$W6s(TV.6S*;sm=FN(:S>' );
define( 'WP_CACHE_KEY_SALT', '$P~7nf5|7L[1aV;+Y#2XaB_Gsh4IROXN/d0sl`g@)|Sa2wa0EdLC`t  =eq`~mVm' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

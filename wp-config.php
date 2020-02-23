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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xyjamesmac123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Va3%$z@7sC>@W_NI*-`B0U_[D$,KAEv3u{50[U%rVb( <bw)JqhKVks!=H5B9NQ=' );
define( 'SECURE_AUTH_KEY',  'n1M-r|(!6so cx(Khdt:>q2;ge6QFvSc1TXe:6$:z8Oa/$Kfs^hs6E=xB>3lj`ja' );
define( 'LOGGED_IN_KEY',    '[BA!9n1xVQ`Vv[-VdT{,a<%GU}iarv2b[cn`b`[g@_# 2jc}A3+kr*>;J}Gn)0au' );
define( 'NONCE_KEY',        'g3y/^4C&:De2.f/e?<9)yRMPg(I1:FS zOw<5%YT718c+Lf,J>L:>9S*C2Tw_w c' );
define( 'AUTH_SALT',        '8nLYTuVJ1]g<%ZKE2Utm#8E?+yt;HEDbNT,ad_U~y=XxD8CHHU:zWzlJU/+YH#=>' );
define( 'SECURE_AUTH_SALT', 'GkHldJ-=n Nmov8Stj{TlQnC_N3wg:F9LNZo*5#B/XWL;N}8= __AtZ*jS-hM,SA' );
define( 'LOGGED_IN_SALT',   '|3yH~H(TD*?^K!4Kou sH j}Pz7J(;_>{P% (mFx OKn+`ORdHna4dskQj(,*l&h' );
define( 'NONCE_SALT',       '&*tRmPp`_w|9lxJjqa*kxit82F$W*9_y(/9Pz-PSH7(xp}aP1JJda(0/,=Ek,dS%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

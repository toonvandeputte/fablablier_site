<?php
require_once dirname( __FILE__ ) . '/../../secrets/creds.php';
require_once dirname( __FILE__ ) . '/../../secrets/config.php';

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
define( 'DB_NAME', $creds['dbname']);

/** MySQL database username */
define( 'DB_USER', $creds['dbuser']);

/** MySQL database password */
define( 'DB_PASSWORD', $creds['dbpass']);

/** MySQL hostname */
define( 'DB_HOST', $creds['dbhost']);

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[MXacX?Z!&blJoc{F,VO+t_@3}/U.peL>F>h:r3sOi(4jrM4k(#[O>o??l;|)|gw');
define('SECURE_AUTH_KEY',  'C/1Og1kG~S_:.NV3|Cl<^*:l+<rkn3&/I+w%S~}.S[FwE@c9wwt/M,]x(xSY}&+k');
define('LOGGED_IN_KEY',    '+P-vd`LmD6wdCif}|EoF,:j;Bu9t@_%Pa-5lB_gvy$FL%sZ)af4TE{|,ON+x@wuV');
define('NONCE_KEY',        'jKQ>|EAE*@mDQ3+`ziQ#HuJSOGnwr|V`X3.rq$*a7kALTgs-h{_?kwgP74V=^qGR');
define('AUTH_SALT',        'y%l-}{%0LIc9!VYdeyYZ[AV8va:@9yp#ttgd,A?WGD-@U0:m$ Q>Y[O$D&|.+^cW');
define('SECURE_AUTH_SALT', 'yjqVN=g4q&I$5K$=FOoA+VAU<K|`Q`#]Y?JV]EQ|CV`<T&=yOTF}u+Bddc_HP[]4');
define('LOGGED_IN_SALT',   'pt,r?jII#VRnPVDoq0G4gPy)km=9rq(cwF$xb6jrQkAH`0j[$QORz%dNY;0Jp5D>');
define('NONCE_SALT',       '33GP,!HlJEGsW>+I{++4upB-c//dvn:?3E G- rQV-plXD)yS<_~CezV-eOMYp#0');

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
define( 'WP_DEBUG', $debug );
// define( 'WP_DEBUG', true );

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        $_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');

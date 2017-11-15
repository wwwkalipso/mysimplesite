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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id3606806_wp_78935a3c87224d82f5f11c2b1d617ee6' );

/** MySQL database username */
define( 'DB_USER', 'id3606806_wp_78935a3c87224d82f5f11c2b1d617ee6' );

/** MySQL database password */
define( 'DB_PASSWORD', '7b6c05c2379fd167c6dfb2e257022dbefd2532f9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DISALLOW_FILE_EDIT',true);

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/Y@!M5YkH<2P*K<E8:-{={ =WW7J<M%DnkFhrav#?qb`8zelz9,Kd@^).D4`}Q&]' );
define( 'SECURE_AUTH_KEY',  'ahZd)6lB*tEZ~90v5{y615o~%/i34^Hyp[6wq8(40y}G`?{=lC~xMsI+(wis=c**' );
define( 'LOGGED_IN_KEY',    '0[2zA7~F;pSzfRNs1%Y=[KV,).T2!4Uw3 kTr9*x`b&8*^ Fey#Rt<%8W>s!r`@X' );
define( 'NONCE_KEY',        'M)TSh}Snw`0^qQDq.k{nyIQ+&j3{:Dn3#tGL@V}u&.#,6*#<$d~d/y7g<CutXv{,' );
define( 'AUTH_SALT',        'N*)=5me0W#=UI^@c[oly!0QohF*S&}y7W/ohXOIeKKlK[}6`Gd(IEkK3Kk*{}PAE' );
define( 'SECURE_AUTH_SALT', 't*CLGZ24}f/qZ!kY>miM}{xK(Ht5K8C`755>w1@8C=]O?AI+j-=9,o$ gO8|&tl_' );
define( 'LOGGED_IN_SALT',   '4|-_NB?Y v+eem)$+f3A$`o1F=(:wQQq}%7T>BF-|$[E;OAk*o{]nb|lp/wK%25x' );
define( 'NONCE_SALT',       'us;/(4:Md?|L#%Hs^9M}mo</PG;0N1oNS@e.b7R@hs>RWnAv`.aJdoPk5+BKg3&p' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mss_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] .'/data/wp-content');
define('WP_CONTENT_URL', 'http://'. $_SERVER['HTTP_HOST'] .'/data/wp-content');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

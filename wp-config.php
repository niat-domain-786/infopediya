<?php
define( 'WPCACHEHOME', '/home4/softwcd9/public_html/infopediya/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'softwcd9_wp502' );

/** MySQL database username */
define( 'DB_USER', 'softwcd9_wp502' );

/** MySQL database password */
define( 'DB_PASSWORD', '7Ss2m!pT5@' );

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
define( 'AUTH_KEY',         '9hswrtetgjmxpexvwpyatzht5vrzzpkd5kynh99kpwbe7pco6ecrhfq4etvfiie8' );
define( 'SECURE_AUTH_KEY',  'rcmklhc1v5zhmnlka95i2kbf6ezsxwrlxhfmvrgxvcrgp9thaagve6o0w8n71jui' );
define( 'LOGGED_IN_KEY',    '7r9nh3u5g5zsauohcfijmrhxqmoa7uhi7bcohrk2rnhrqlnu7nzc7oudjxzzv5ku' );
define( 'NONCE_KEY',        'no69izj0ftxyyvvi7rgvqtgrlepol9ipmvjhqblybcuw2di0dx434bzqzwahmgty' );
define( 'AUTH_SALT',        'u4bspsgmi6v4umabt4ekicfc1dx3jhywkvie5en0hpmifiecczjgv1cl0tcgzbw8' );
define( 'SECURE_AUTH_SALT', '0ikuduutsh2slalpifqu9fkj7ariq7sjupher7jkdr4kmv5tljxmujoegyh4zryy' );
define( 'LOGGED_IN_SALT',   'vixly5lyp0e90jokzdobiwcxtryvwa3v1amngl3f48kstewhdmqwyctt3apgekyd' );
define( 'NONCE_SALT',       'w45de4g4ao13naodjvhq3o6mlxmtdyibidxvunoltpzgwq12gyc4wbee9kqqtvor' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

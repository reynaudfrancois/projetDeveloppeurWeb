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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'francoi3_wp710' );

/** MySQL database username */
define( 'DB_USER', 'francoi3_wp710' );

/** MySQL database password */
define( 'DB_PASSWORD', 'n!Mp4fS.]7!4C]79' );

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
define( 'AUTH_KEY',         'q4ldjwyjhcotchyahr8ah5pxmeqmxbcisty5uq0je8va8wcecoo8pwhae3fj2ygo' );
define( 'SECURE_AUTH_KEY',  '4bzheysvgnspajei5ryfmxzn30wjdcy5r8osw9stlzvm7ulcehppaf1jh6tr5h6a' );
define( 'LOGGED_IN_KEY',    '7hpcu1x51xgja5jt1mvpfujcnkuimk5abrbgbvv8709q8rvaaoxbfwqoydwlonrm' );
define( 'NONCE_KEY',        'rvkjlk75z75zsut4vadckxxxex5o2jpeuqp9zfomkuvxhra6st524rspkfe5w3hw' );
define( 'AUTH_SALT',        'nyhbuu7th4hfxt7amd7s2lwi2wu0wnuz8nc09wcyritfqwzcwpktwfaa6bfs5fyr' );
define( 'SECURE_AUTH_SALT', 'jpv8hi8qjkzyfo6l0qm7bp9cfhvntv7qyj0fpnqvh73qrnp4noogry8ovhqy76cq' );
define( 'LOGGED_IN_SALT',   'murgdrutpohzgsyps1w1nby74pllyy6e7f0utimd46bhz7tytur4pbhsf00ls13a' );
define( 'NONCE_SALT',       'w2gsa7myvly7jhkbtlnwx2cs5thz5bukpzkyr8jiblyy5naorqnofean1iqjchde' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt6_';

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

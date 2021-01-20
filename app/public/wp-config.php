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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '5ql2Zolz4r+bZl8d61p7KvPJvwjnSNmT2G+7HK4//DWGsDnqzxy4mOYDl3QID0CZ9wKccPQ+McQp0u1vK9kWiQ==');
define('SECURE_AUTH_KEY',  'uILcZha9/sYh91GJl8jQ3bixiuv3xCPD+oOWiRnbOo9ofQJXQD76MVKpM87izpVoOIse+IaR8TaxWisCGU3asA==');
define('LOGGED_IN_KEY',    'j2ELWiUWBvN+4jgKnUtSHAOvdY+Bxs4dmXN3oWg/p8PHtKdwFFh1t6wyn/x2dvnBZ4iBEKqD2YmDoeQmCSkI+A==');
define('NONCE_KEY',        'bLiLTebsYvEAkYn2RadSqtxrpJG+NH+mRjVQwnFRj74HQbBK0fZzcics1fRvOZWvUon8e69p5abetcWYSf+Ygg==');
define('AUTH_SALT',        '0zHWflZw7SoM27bJDRRrr4X8hr8ZPjIg/e6rBRV9/UvyPqf9A933F+m1Jh8KS3IDXjydh0f/wjV0lFeTViVzoA==');
define('SECURE_AUTH_SALT', 'Cf9M+Qw0kOLBFTrNj2qsK9XZjr1oBgFkbhJATPfQ+aYEiVbbWQinLACeITIekSla4C4PytmvH68y0qCV8L6V5g==');
define('LOGGED_IN_SALT',   '6smjKQ2P/rG0aIwyyba8gHLo2SjErvdZxLTAsjHPq53QP77KIhFU1d+0zMpB1VQbTdyt8j+0IgfurkdBi8Htxg==');
define('NONCE_SALT',       'Jc223TddMlN3l21s4hpMwD1IXwws1cbIUlvRDBWSJBFexROk+Mwqb77qKbvNr9DLoIEUvZ/rPaLq/8tK3OLhLQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

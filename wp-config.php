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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'QF1R)O|c??s)9<WuYg)Mx:`e$nhea4=9PJ()--imb@QXm{Bu:9zS)q9x*>66czv-' );
define( 'SECURE_AUTH_KEY',  'o++#G1J*S-8(0M5]j)->gt_V&2oaOCox]N0]$2836El*t8(1`&B5c^l[XmuEZGW1' );
define( 'LOGGED_IN_KEY',    '#mx!orNIpd+he]0zbYte&ErfPE3 Z(!q#kg4}>XPxm7,{3h&#yHy#o/1q0lm/bE%' );
define( 'NONCE_KEY',        '${w/;-u?rzUw6SI|A^Om=+}3gx~=.|-[8*VpFo%%AUXnx=ms,b?oc5&OmxPz@ewO' );
define( 'AUTH_SALT',        'GVZ7d~3so?Y8q5Dq!m#Tw>eJeRLu0Dv}y5`%>AL46/Tnao$MGPI5+hAK5w7 *<y_' );
define( 'SECURE_AUTH_SALT', 'LUp2[(q3;AlB3P|uh-,@<j#@A0gX@5,<<R,,v(_onG%wx{=OZS->kQpV~GDAWbZ`' );
define( 'LOGGED_IN_SALT',   'n?,hYr)^RROL7<JOqgT+D;TA>{w+(U^20w%Ui? ihVN!<$:E$3z4&`iObEy-T3}n' );
define( 'NONCE_SALT',       'm 6iU1[VbR :]t<>D:;T4,LH8pQ~2rW<~?)s~,#VK+Y:Zg-~)]PijQViupy2C!.*' );

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

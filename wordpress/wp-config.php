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
define('DB_NAME', 'evaluation_7');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'simplonco');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '397N)M+wLe|<G<|GP,`[=c^]MIcJu^0*I{R--Mhe!Af5#OIvLC{4(.E-KS3V6cq5');
define('SECURE_AUTH_KEY',  '`r!f0W,]4_TxV$tq,%z.)K/Nwn|&hOs-gB{]vel2QvH.44kQ|8MGT`Td:Oa`=/ZX');
define('LOGGED_IN_KEY',    '.+mfjf9){tnjh``A|n]XR%<^NP=*hIq[Y]x+STllmA6>ecW,(HAMvrd#LXd||mcE');
define('NONCE_KEY',        'w(W/HC%u-af~~j-b{ B-&mAhP[Hco[Y- +-VTJN2aT(}Z0*E[J3/XSfn+vGci&OO');
define('AUTH_SALT',        ';Vf[P!`JN:FQuK|CY+lh)a:P+ze]upDc;y--%Nug $lPtg5gnVE:-48aP(u_Y>3 ');
define('SECURE_AUTH_SALT', 'za2GR6 %.$TIZI^-1#&_^:/w-zUY.lme=,?ZVc7ZNdKUo+/4cf {lsI,hy9;>1W)');
define('LOGGED_IN_SALT',   '`397RhhY6S?)mu5,kpSj[!+,XfgjmZ:>Bo(*-Sg[-CX}wm]XA_W1Dpa@o!VI17QD');
define('NONCE_SALT',       '4biiheJdt}bcbvNFJ5h$x8xZttWG+=f~VCd[|o}gE+(y|z!C+K+j,u?u-m?zu7eu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
define('WP_MEMORY_LIMIT', '256M');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


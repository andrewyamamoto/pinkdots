<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pinkdots');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'zS%N`gKT_+7 &i$}>N6|Nb,H]l.ndF}9p$5j]OUpJ@u,?OxM.d-=OCt|=5uc_9^ ');
define('SECURE_AUTH_KEY',  'L]hFWS_u;|thumV>M.YL}Z+Z^T=WCu1)j[V~ch-FJ*]22+*Rp5R#;CR/SXP vwpy');
define('LOGGED_IN_KEY',    '2gGiyb;sicG^.T))R|1Cv59-0nzKrC^us:}]Z5sR`<c^72f:tSf|!hq3EJ2%s6^;');
define('NONCE_KEY',        'LR?3BTjCk!SH8h}j03I(?MqADdsvjJuNpD<!B<+w]c?bQ+U[tVY hEhVeL$xW^+*');
define('AUTH_SALT',        '4PZ{qT15m<?+<cM-/=I=5*JTzS%aJe+k0=|8jHc j+aHd<^FGU&hP7 ^5f=^Y6|3');
define('SECURE_AUTH_SALT', '7euq2b&LNMN1}.178`{a,!Vxj.jN+P[KS.xh^]!aGR3[nNXBS>+-ck-U^L<pod,S');
define('LOGGED_IN_SALT',   '6,n&an#ySu3pvYO0-U<d(eL2$oA3 PE!EW unMtWO?S4$89L7S/h3{If9icNCG=?');
define('NONCE_SALT',       'cY?taO/w4K=V52$[2@?kf[#-.(hL_s1Av/@!ct]0R4zY9u+8]C,&4F,o9bb4JO1V');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

<?php
define('DB_NAME', 'austral-wp-A7Dqp3fc');
define('DB_USER', 'h9qTCDaasqBP');
define('DB_PASSWORD', 'S0aXXrIiinso0c3x');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'OQP54MvhiCFYLtnnk0yV5WFRkmcNhBAZmfWbyqFm');
define('SECURE_AUTH_KEY',  'GhdHX1ql4flAXDf0yHNXnHqKa2rt92BHQ8wb6PIt');
define('LOGGED_IN_KEY',    'P6kJPCIZtkX7h6eBKg3JIkUAPdBkScqSO6x0aytg');
define('NONCE_KEY',        '7Vx07RuTp0fOE2sAdnOnzGHbUGggHE8McnDWRKXO');
define('AUTH_SALT',        'LMUe4uan6equyUhaWHK3JkhrQEYy08stkFDOt827');
define('SECURE_AUTH_SALT', 'FN0BdhkYKsqkTIcraGKJZmUMS1gCqw89apD9SC8m');
define('LOGGED_IN_SALT',   'pwr82fToJYrJXt0m7bwLVtbHu21liHlGp7i6E3pQ');
define('NONCE_SALT',       '7uJN1uvMFF1nvpBSvRZwzYnmnZGDFUqXo5vOPkFs');

$table_prefix  = 'wp_2890bcd8ec_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

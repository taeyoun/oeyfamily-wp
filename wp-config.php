<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'e9f757c8696418d44954d519c3bd8f50');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY', '3b59bab8c47ed44396cf7d4adf970fdb5db50add79841c247b031d05976c53f8');
define('AUTH_SALT', '1603cf11ed9715888b22099bfcf7bd9243d424fae83cab7350df9a8ae3f3068b');
define('AUTH_KEY', '3b59bab8c47ed44396cf7d4adf970fdb5db50add79841c247b031d05976c53f8');
define('AUTH_SALT', '1603cf11ed9715888b22099bfcf7bd9243d424fae83cab7350df9a8ae3f3068b');
define('LOGGED_IN_KEY', '61a1de478666abccc0d014e3cbc882321d2afcd18745c0dbe2c45735285dedde');
define('LOGGED_IN_SALT', '557eae459f898da9ed11924de5ce0a57a11dfb1d717d814f7903a1acbc43fd69');
define('NONCE_KEY', 'fa8000c00d5ea5d51191d060aecdb8839c0edc5c6fd699a885414ecf28a145ef');
define('NONCE_SALT', 'dfca419efc99643a9b9994ab941b138f394b108c1df05c43cc2895186bf0b801');

$table_prefix  = 'wp_';

// WordPress Localized Language, defaults to English.
define ('WPLANG', '');

// WordPress debugging mode (for developers).
define('WP_DEBUG', false);

// Single-Site (serves any hostname)
// For Multi-Site, see: http://www.turnkeylinux.org/docs/wordpress/multisite
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

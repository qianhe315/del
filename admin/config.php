<?php
// HTTP
define('HTTP_SERVER', 'http://'.$_SERVER['HTTP_HOST'].'/admin/');
define('HTTP_CATALOG', 'http://'.$_SERVER['HTTP_HOST'].'/');

// HTTPS
define('HTTPS_SERVER', 'http://'.$_SERVER['HTTP_HOST'].'/admin/');
define('HTTPS_CATALOG', 'http://'.$_SERVER['HTTP_HOST'].'/');

// DIR
define('DIR_APPLICATION', '/www/wwwroot/leotard_demo/admin/');
define('DIR_SYSTEM', '/www/wwwroot/leotard_demo/system/');
define('DIR_IMAGE', '/www/wwwroot/leotard_demo/image/');
define('DIR_STORAGE', DIR_SYSTEM.'storage/');
define('DIR_CATALOG', '/www/wwwroot/leotard_demo/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'www_leotard_com');
define('DB_PASSWORD', 'vertrigo');
define('DB_DATABASE', 'www_leotard_com');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');

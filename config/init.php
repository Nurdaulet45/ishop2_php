<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core/');
define("LIBS", ROOT . '/vendor/ishop/core/libs/');
define("CACHE", ROOT . '/tmp/cache/');
define("CONF", ROOT . '/config/');
define("LAYOUT", 'default');

$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://ishop2/index.php
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://ishop2/

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';

<?php
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \ishop\App();
//var_dump(\ishop\App::$app = \ishop\Registry::getProperties());

/*throw new Exception('Страница не найдена!!!', 500);*/

/*debug(\ishop\Router::getRoutes());*/
<?php
require_once 'libs/Router.php';
require_once 'controller/ProductApiController.php';


// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('vinos', 'GET', 'ProducApiController', 'getWines');
$router->addRoute('vinos', 'POST', 'ProductApiController', 'createWine');
$router->addRoute('vinos/:ID', 'GET', 'ProductApiController', 'getWine');
$router->addRoute('vinos/:ID', 'DELETE', 'ProductApiController', 'deleteWine');
$router->addRoute('vinos/:ID', 'PUT', 'ProductApiController', 'updateWine');

$router->addRoute('bodegas', 'GET', 'CategoryApiController', 'getStore');
$router->addRoute('bodegas', 'POST', 'CategorytApiController', 'createStore');
$router->addRoute('bodegas/:ID', 'GET', 'CategorytApiController', 'getStore');
$router->addRoute('bodegas/:ID', 'DELETE', 'CategorytApiController', 'deleteStore');
$router->addRoute('bodegas/:ID', 'PUT', 'CategorytApiController', 'updateStore');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

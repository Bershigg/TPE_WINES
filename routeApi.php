<?php
require_once 'libs/Router.php';
require_once 'controller/CommentApiController.php';


// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comments', 'GET', 'CommentApiController', 'getComment');
$router->addRoute('comments', 'POST', 'CommentApiController', 'createComment');
$router->addRoute('comments/:ID', 'DELETE', 'CommentApiController', 'createComment');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

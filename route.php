<?php    
    require_once "./Controller/PublicController.php";
    require_once "./Controller/AdminController.php";
    require_once "./Controller/LoginController.php";
    require_once "./Controller/RegisterController.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'start'; // acción por defecto si no envían
    }

    $params = explode('/', $action);

    $PublicController = new   PublicController();
    $AdminController = new   AdminController();
    $LoginController = new LoginController();
    $RegisterController = new RegisterController();

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'start': 
            $PublicController->start(); // Comenzar
            break;  
        case 'login': 
            $LoginController->login(); // Loguearse
            break;  
        case 'verify': 
            $LoginController->verifylogin(); // verificar logueo
            break;    
        case 'logout': 
            $LoginController->logout(); // Desloguearse
            break;  
        case 'adminHome': 
            $AdminController->adminHome(); // Comenzar
            break;         
        case 'register': 
            $RegisterController->register(); // Registrarse
            break;   
        case 'verifyregister': 
            $RegisterController->verifyregister(); // verificar registro
            break; 
        case 'home': 
            $PublicController->showHome(); //Listado de los vinos -- listado de items
            break;
        case 'wines': 
            $PublicController->showWines(); //Listado de los vinos -- listado de items
            break;  
        case 'showListStore': 
            $PublicController->showListStore(); //Muestra la lista de bodegas -- listado de categorias
            break;  
        case 'winesForStore': 
            $PublicController->winesForStore($params[1]); // Muestra los vinos de una bodega seleccionada -- listado de item por categoria
            break;
        case 'viewWine': 
            $PublicController->viewWine($params[1]); // Muestra los datos del vino
            break;
        case 'crudWines': 
            $AdminController->crudWines(); //home de crud de un vino -- lista de items admin
            break;
        case 'createWine': 
            $AdminController->createWine(); //crear un vino -- agrega items admin
            break;
        case 'deleteWine': 
            $AdminController->deleteWine($params[1]); //borro un vino -- 
            break;
        case 'goUpdateWine': 
            $AdminController->goUpdateWine($params[1]); //modifico un vino -- 
            break;
        case 'updateWine': 
            $AdminController->updateWine(); //modifico un vino -- 
            break;
        case 'showCreateWine': 
            $AdminController->showCreateWine(); //muestra formulario para crear un vino -- 
            break;
        case 'crudStores': 
            $AdminController->crudStore(); //home de crud de una bodega -- lista de categorias admin
            break;
        case 'showCreateStore': 
            $AdminController->showCreateStore(); //muestra formulario para crear una bodega --
            break;
        case 'createStore': 
            $AdminController->createStore(); //crea una bodega--
            break;
        case 'deleteStore': 
            $AdminController->deleteStore($params[1]); //borra una bodega--
            break;
        case 'goUpdateStore': 
            $AdminController->goUpdateStore($params[1]); //modificar una bodega--
            break;
        case 'updateStore': 
            $AdminController->updateStore(); //modificar una bodega--
            break;
    default: 
            echo('404 Page not found'); 
            break;
            
    }

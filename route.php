<?php    
    require_once "./Controller/PublicController.php";
    require_once "./Controller/AdminController.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    $params = explode('/', $action);

    $PublicController = new   PublicController();
    $AdminController = new   AdminController();

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'home': 
            $PublicController->showHome(); //Listado de los vinos -- listado de items
            break;  
        case 'showListStore': 
            $PublicController->showListStore(); //Muestra la lista de bodegas -- listado de categorias
            break;  
        case 'winesForStore': 
            $PublicController->winesForStore($params[1]); // Muestra los vinos de una bodega seleccionada -- listado de item por categoria
            break;
        case 'viewWine': 
            $PublicController->viewWine($params[1]); 
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
        default: 
            echo('404 Page not found'); 
            break;
            
    }

    /*case 'home': 
        $taskController->showHome(); 
        break;
    case 'createTask': 
        $taskController->createTask(); 
        break; */

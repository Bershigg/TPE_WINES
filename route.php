<?php    
    require_once "./Controller/WineController.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    $params = explode('/', $action);

    $WineController = new   WineController();

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'home': 
            $WineController->showHome(); //Listado de los vinos
            break;  
        case 'showListStore': 
            $WineController->showListStore(); //Muestra la lista de bodegas
            break;  
        case 'winesForStore': 
            $WineController->winesForStore($params[1]); // Muestra los vinos de una bodega seleccionada
            break;
        case 'viewWine': 
            $WineController->viewWine($params[1]); //Detalle de un vino
            break;
        case 'crudWines': 
            $WineController->crudWines(); //home de crud de un vino
            break;
        case 'createWine': 
            $WineController->createWine(); //crear un vino
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

<?php
require_once "./smarty-3.1.39/libs/Smarty.class.php";
class WineView{
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

    }

    function showWines ($wines){
        $this->smarty->assign('titulo', 'Lista de Vinos');
        $this->smarty->assign('wines' , $wines);

        $this->smarty->display('templates/Winelist.tpl');
        
    }

    function showStore ($store){
        $this->smarty->assign('titulo', 'Lista de Bodegas');
        $this->smarty->assign('store' , $store);

        $this->smarty->display('templates/Storelist.tpl');
        
    }

    function showWinesForStore($winesForStore){
        $this->smarty->assign('titulo', 'Lista de vinos por bodegas');
        $this->smarty->assign('winesForStore' , $winesForStore);

        $this->smarty->display('templates/WinesForStore.tpl');
        
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showCrudLocation(){
        header("Location: ".BASE_URL."crudWines");
    }

    function showwine($wine){
        $this->smarty->assign('Wine', $wine);
        $this->smarty->display('templates/WineDetail.tpl');
    }

    function showCrudWine($wines){
        $this->smarty->assign('titulo', 'Agregar, borrar o modificar un vino');
        $this->smarty->assign('wines' , $wines);
        $this->smarty->display('templates/crudWines.tpl');
        
    }

    /*   function showTasks ($tasks){
        $this->smarty->assign('titulo', 'Lista de tareas');
        $this->smarty->assign('tasks', $tasks);

        $this->smarty->display('templates/taskList.tpl');
    } */

    

}
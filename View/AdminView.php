<?php
require_once "./smarty-3.1.39/libs/Smarty.class.php";

class AdminView{
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

    }

    function showCrudWine($wines, $stores){
        $this->smarty->assign('titulo', 'Agregar, borrar o modificar un vino');
        $this->smarty->assign('wines' , $wines);
        $this->smarty->assign('stores' , $stores);
        $this->smarty->display('templates/crudWines.tpl');
        
    }

    function showCrudLocation(){
        header("Location: ".BASE_URL."crudWines");
    }

    function showGoUpdate($id){
        $this->smarty->assign('titulo', 'modifica el vino');
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/updateWine.tpl');
    }


    
}
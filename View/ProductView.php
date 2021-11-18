<?php
require_once "./smarty-3.1.39/libs/Smarty.class.php";

class ProductView{
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

    }

    function showCrudWine($wines, $condition){
        $this->smarty->assign('titulo', 'Listado de vinos');
        $this->smarty->assign('wines' , $wines);
        $this->smarty->assign('user' , $condition);
        $this->smarty->display('templates/crudWines.tpl');
        
    }

    function showCrudLocation(){
        header("Location: ".BASE_URL."crudWines");
    }

    function showGoUpdate($id, $vino, $stores){
        $this->smarty->assign('titulo', 'Modificar vino');
        $this->smarty->assign('id', $id);
        $this->smarty->assign('vino', $vino);
        $this->smarty->assign('stores', $stores);
        $this->smarty->display('templates/updateWine.tpl');

    }

    function showCreateWine($wines, $stores){
        $this->smarty->assign('titulo', 'Agregar, borrar o modificar un vino');
        $this->smarty->assign('wines' , $wines);
        $this->smarty->assign('stores', $stores);
        $this->smarty->display('templates/showCreateWine.tpl');
    }

    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }

    function showWines ($wines){
        $this->smarty->assign('titulo', 'Lista de Vinos');
        $this->smarty->assign('wines' , $wines);
        $this->smarty->display('templates/Winelist.tpl');    
    }

    function showWine($wines, $descripcion){
        $this->smarty->assign('wines', $wines);
        $this->smarty->assign('descripcion', $descripcion);
        $this->smarty->display('templates/WineDetail.tpl');
    }
}
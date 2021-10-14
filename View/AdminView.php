<?php
require_once "./smarty-3.1.39/libs/Smarty.class.php";

class AdminView{
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

    }

    function showCrudWine($wines, $stores){
        $this->smarty->assign('titulo', 'Listado de vinos');
        $this->smarty->assign('wines' , $wines);
        $this->smarty->assign('stores' , $stores);
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
        $this->smarty->assign('stores' , $stores);
        $this->smarty->display('templates/showCreateWine.tpl');
    }

    function showCrudStore($stores){
        $this->smarty->assign('titulo', 'Agregar, borrar o modificar una bodega');
        $this->smarty->assign('stores' , $stores);
        $this->smarty->display('templates/crudStore.tpl');
        
    }

    function showCreateStore($stores){
        $this->smarty->assign('titulo', 'Cargar una bodega');
        $this->smarty->assign('stores' , $stores);
        $this->smarty->display('templates/showCreateStore.tpl');
    }

    function showCrudStoreLocation(){
        header("Location: ".BASE_URL."crudStores");
    }

    function showGoUpdateStore($id){
        $this->smarty->assign('titulo', 'Modificar bodega');
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/updateStore.tpl');
    }

    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }
    function showAdminHome(){
    
        $this->smarty->display('templates/adminHome.tpl');
    }
}
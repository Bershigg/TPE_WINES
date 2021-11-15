<?php
require_once "./smarty-3.1.39/libs/Smarty.class.php";

class CategoryView{
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

    }

    function showStore ($store){
        $this->smarty->assign('titulo', 'Lista de Bodegas');
        $this->smarty->assign('store' , $store);

        $this->smarty->display('templates/Storelist.tpl');
        
    }

    function showWinesForStore($winesForStore){
        $this->smarty->assign('titulo', 'Lista de vinos por Bodega');
        $this->smarty->assign('winesForStore' , $winesForStore);
        $this->smarty->display('templates/WinesForStore.tpl');
        
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
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
}
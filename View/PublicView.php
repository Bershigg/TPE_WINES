<?php
require_once "./smarty-3.1.39/libs/Smarty.class.php";

class PublicView{
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

    }

    function start(){
        $this->smarty->display('templates/start.tpl');
        
    }

    function showHome (){
        $this->smarty->display('templates/home.tpl');
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
        $this->smarty->assign('titulo', 'Lista de vinos por Bodega');
        $this->smarty->assign('winesForStore' , $winesForStore);
        $this->smarty->display('templates/WinesForStore.tpl');
        
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    
    function showWine($wines, $descripcion){
        $this->smarty->assign('wines', $wines);
        $this->smarty->assign('descripcion', $descripcion);
        $this->smarty->display('templates/WineDetail.tpl');
    }

}
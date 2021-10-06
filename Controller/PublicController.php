<?php
require_once "./Model/PublicModel.php";
require_once "./View/PublicView.php";

class PublicController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new PublicModel();
        $this->view = new PublicView();
    }
    
    function showHome() {
        $wines = $this->model->getWines();
        $this->view->showWines($wines);
    }

    function showListStore(){
        $store = $this->model->getStore();
        $this->view->showStore($store);
             
    }

    function winesForStore($id){
        $vinosporbodega = $this->model->storeSelected($id);
        $this->view->showWinesForStore($vinosporbodega);
        
    }   

    function viewWine($id){
        $vino = $this->model->getWine($id);
        $this->view->showWine($vino);
    }



}
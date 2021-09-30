<?php
require_once "./Model/WineModel.php";
require_once "./View/WineView.php";

class WineController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new WineModel();
        $this->view = new WineView();
    }
    
    function showHome() {
        $wines = $this->model->getWines();
        $this->view->showWines($wines);
    }

    function crudWines(){
        $wines = $this->model->getWines();
        $this->view->showCrudWine($wines); 
    }

    function createWine(){
      
        $this->model->insertWine($_POST['nameWines'], $_POST['style'], $_POST['id_store'], $_POST['price']);
        $this->view->showCrudLocation(); 
    }


    /*    function showHome(){

        $tasks = $this->model->getTasks();
        $this->view->showTasks($tasks);
        
    }

    function createTask(){
       
        
        $this->model->insertTask($_POST['title'], $_POST['description'], $_POST['priority']);
        $this->view->showHomeLocation();
        
    }*/ 

    function showListStore(){
        $store = $this->model->getStore();
        $this->view->showStore($store);
             
    }

    function winesForStore($id){
        $winesForStore = $this->model->storeSelected($id);
        $this->view->showWinesForStore($winesForStore);
        
    }

    function viewWine($id){
        $wine = $this->model->getWine($id);
        $this->view->showWine($wine);
        
    }



}
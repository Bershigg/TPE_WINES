<?php
require_once "./Model/AdminModel.php";
require_once "./Model/PublicModel.php";
require_once "./View/AdminView.php";

class AdminController{

    private $model;
    private $view;

    function __construct(){
        $this->modelAdmin = new AdminModel();
        $this->modelPublic = new PublicModel();
        $this->view = new AdminView();
    }

    function crudWines(){
        $wines = $this->modelPublic->getWines();
        $stores = $this->modelPublic->getStore();
        $this->view->showCrudWine($wines, $stores); 
    }

    function createWine(){
        $this->modelAdmin->insertWine($_POST['nameWines'], $_POST['style'], $_POST['id_store'], $_POST['price']);
        $this->view->showCrudLocation(); 
    }

    function deleteWine($id){
        $this->modelAdmin->deleteWine($id);
        $this->view->showCrudLocation();
    }

    function updateWine(){
        $this->modelAdmin->updateWine($_POST['id_Wine'], $_POST['nameWines'], $_POST['style'], $_POST['id_store'], $_POST['price']);
        $this->view->showCrudLocation();
    }

    function goUpdateWine($id){
        $this->view->showGoUpdate($id);
    }

}

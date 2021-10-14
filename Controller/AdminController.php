<?php
require_once "./Model/AdminModel.php";
require_once "./Model/PublicModel.php";
require_once "./View/AdminView.php";
require_once "./Helpers/AuthHelper.php";

class AdminController{

    private $model;
    private $view;
    private $AuthHelper;

    function __construct(){
        $this->modelAdmin = new AdminModel();
        $this->modelPublic = new PublicModel();
        $this->view = new AdminView();
        $this->AuthHelper = new AuthHelper();
    }

    function crudWines(){

        $this->AuthHelper->checkLoggedIn();
        $wines = $this->modelPublic->getWines();
        $stores = $this->modelPublic->getStore();
        $this->view->showCrudWine($wines, $stores); 
    }

    function createWine(){
        $this->AuthHelper->checkLoggedIn();
        $this->modelAdmin->insertWine($_POST['nameWines'], $_POST['style'], $_POST['id_store'], $_POST['price']);
        $this->view->showCrudLocation(); 
    }

    function deleteWine($id){
        $this->AuthHelper->checkLoggedIn();
        $this->modelAdmin->deleteWine($id);
        $this->view->showCrudLocation();
    }

    function updateWine(){
        $this->AuthHelper->checkLoggedIn();
        $this->modelAdmin->updateWine($_POST['id_Wine'], $_POST['nameWines'], $_POST['style'], $_POST['id_store'], $_POST['price']);
        $this->view->showCrudLocation();
    }

    function goUpdateWine($id){
        $this->AuthHelper->checkLoggedIn();
        $vino = $this->modelPublic->getWine($id);
        $stores = $this->modelPublic->getStore();
        $this->view->showGoUpdate($id, $vino, $stores);
    }

    function showCreateWine(){
        $this->AuthHelper->checkLoggedIn();
        $wines = $this->modelPublic->getWines();
        $stores = $this->modelPublic->getStore();
        $this->view->showCreateWine($wines, $stores);
    }

    function crudStore(){
        $this->AuthHelper->checkLoggedIn();
        $stores = $this->modelPublic->getStore();
        $this->view->showCrudStore($stores); 
    }

    function showCreateStore(){
        $this->AuthHelper->checkLoggedIn();
        $stores = $this->modelPublic->getStore();
        $this->view->showCreateStore($stores);
    }

    function CreateStore(){
        $this->AuthHelper->checkLoggedIn();
        $this->modelAdmin->insertStore($_POST['nameStore']);
        $this->view->showCrudStoreLocation(); 
    }
    
    function deleteStore($id){
        $this->AuthHelper->checkLoggedIn();
        $this->modelAdmin->deleteStore($id);
        $this->view->showCrudStoreLocation();
    }

    function goUpdateStore($id){
        $this->AuthHelper->checkLoggedIn();
        $this->view->showGoUpdateStore($id);
    }

    function updateStore(){
        $this->AuthHelper->checkLoggedIn();
        $this->modelAdmin->updateStore($_POST['id_store'], $_POST['nameStore']);
        $this->view->showCrudStoreLocation();
    }
    function adminHome(){
        $this->AuthHelper->checkLoggedIn();
        $this->view->showAdminHome();
    }
}

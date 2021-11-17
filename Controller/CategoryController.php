<?php
require_once "./Model/CategoryModel.php";
require_once "./View/CategoryView.php";
require_once "./Helpers/AuthHelper.php";

class CategoryController{

    private $model;
    private $view;
    private $AuthHelper;

    function __construct(){
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
        $this->AuthHelper = new AuthHelper();
    }

    function showListStore(){
        $stores = $this->model->getStores();
        $this->view->showStore($stores);
             
    }

    function winesForStore($id){
        $vinosporbodega = $this->model->getStore($id);
        $this->view->showWinesForStore($vinosporbodega);
        
    }   

    function crudStore($message = null){
        $this->AuthHelper->checkLoggedIn();
        $stores = $this->model->getStores();
        $this->view->showCrudStore($stores, $message); 
    }

    function showCreateStore(){
        $this->AuthHelper->checkLoggedIn();
        $stores = $this->model->getStores();
        $this->view->showCreateStore($stores);
    }

    function CreateStore(){
        $this->AuthHelper->checkLoggedIn();
        $this->model->insertStore($_POST['nameStore']);
        $this->view->showCrudStoreLocation(); 
    }

    function deleteStore($id){
        $this->AuthHelper->checkLoggedIn();
        try {
            $this->model->deleteStore($id);
            $this->view->showCrudStoreLocation();
        } catch (Exception $e) {
            $message = "No se puede borrar la bodega porque posee vinos asocioados";
            $this->view->showCrudStoreLocation($message);
        }
    }

    function goUpdateStore($id){
        $this->AuthHelper->checkLoggedIn();
        $this->view->showGoUpdateStore($id);
    }

    function updateStore(){
        $this->AuthHelper->checkLoggedIn();
        $this->model->updateStore($_POST['id_store'], $_POST['nameStore']);
        $this->view->showCrudStoreLocation();
    }
}
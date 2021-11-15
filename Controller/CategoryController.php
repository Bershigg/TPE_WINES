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
        $store = $this->model->getStore();
        $this->view->showStore($store);
             
    }

    function winesForStore($id){
        $vinosporbodega = $this->model->storeSelected($id);
        $this->view->showWinesForStore($vinosporbodega);
        
    }   

    function crudStore(){
        $this->AuthHelper->checkLoggedIn();
        $stores = $this->model->getStore();
        $this->view->showCrudStore($stores); 
    }

    function showCreateStore(){
        $this->AuthHelper->checkLoggedIn();
        $stores = $this->model->getStore();
        $this->view->showCreateStore($stores);
    }

    function CreateStore(){
        $this->AuthHelper->checkLoggedIn();
        $this->model->insertStore($_POST['nameStore']);
        $this->view->showCrudStoreLocation(); 
    }

    function deleteStore($id){
        $this->AuthHelper->checkLoggedIn();
        $this->model->deleteStore($id);
        $this->view->showCrudStoreLocation();
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
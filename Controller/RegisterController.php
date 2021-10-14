<?php
require_once "./Model/RegisterModel.php";
require_once "./View/RegisterView.php";

class RegisterController {
    
    private $model;
    private $view;

    function __construct(){
        $this->model = new RegisterModel();
        $this->view = new RegisterView();
    }

    function register(){
        $this->view->showRegister();
    }

    function verifyregister(){
        if(!empty($_POST['name']) && !empty($_POST['password'])){
            $username = $_POST['name'];
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $this->model->insertRegister($username, $password);
        }
    $this->view->showHomeLocation();
    }
}
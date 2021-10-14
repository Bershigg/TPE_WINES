<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";

class LoginController {
    
    private $model;
    private $view;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function login(){
        $this->view->showLogin();
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->showLogin();
    }

    function verifylogin(){
        if(!empty($_POST['name']) && !empty($_POST['password'])){
            $username= $_POST['name'];
            $userpass= $_POST['password'];
     

            $user = $this->model->getUser($username);

            if($user && password_verify($userpass, $user->Password)){

                session_start();
                $_SESSION["name"] = $username;
                $this->view->showAdminHome();
            }
            else{
                $this->view->showLogin("Acceso Denegado");
            }
     
        }
     
    }
}
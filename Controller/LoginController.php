<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";
require_once "./Helpers/AuthHelper.php";

class LoginController {
    
    private $model;
    private $view;
    private $AuthHelper;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
        $this->AuthHelper = new AuthHelper();
    }

    function start() {
        $this->view->start();
    }

    function showHome() {
        $this->view->showHome();
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

    function adminHome(){
        $this->AuthHelper->checkLoggedIn();
        $this->view->showAdminHome();
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
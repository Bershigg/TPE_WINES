<?php

require_once "./smarty-3.1.39/libs/Smarty.class.php";

class LoginView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showLogin($error = ""){
        $this->smarty->assign('titulo', 'Login');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/Login.tpl');
        
    }

    function showAdminHome(){
        header("Location: ".BASE_URL."adminHome");
    }
}
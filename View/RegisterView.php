<?php

require_once "./smarty-3.1.39/libs/Smarty.class.php";

class RegisterView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showRegister(){
        $this->smarty->assign('titulo', 'Register');
        $this->smarty->display('templates/ShowRegister.tpl');
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
}
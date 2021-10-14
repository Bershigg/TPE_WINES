<?php

class RegisterModel{

    private $db;

    function __construct(){
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=db_wine;charset=utf8', 'root', '');
    }
    
    function insertRegister($username, $password){
        $sentencia = $this->db->prepare("INSERT INTO users (NameUser, Password) VALUES (?, ?)");
        $sentencia->execute(array($username, $password));
    }
}
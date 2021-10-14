<?php

class UserModel{

    private $db;

    function __construct(){
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=db_wine;charset=utf8', 'root', '');
    }
    
    function getUser($username){
        $query = $this->db->prepare('SELECT * FROM users WHERE NameUser = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
<?php

class AdminModel{

    private $db;
    function __construct(){
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=db_wine;charset=utf8', 'root', ''); 
    }

    function insertWine($namewine, $style, $id_store, $price)   {
        $sentencia = $this->db->prepare("INSERT INTO wines(NameWine, Style, id_store, Price) VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($namewine, $style, $id_store, $price));
    }

    
    function deleteWine($id){
        $sentencia = $this->db->prepare("DELETE FROM wines WHERE id_Wine=?");
        $sentencia->execute(array($id));
    }

    function updateWine($id, $namewine, $style, $id_store, $price){
        $sentencia = $this->db->prepare("UPDATE wines SET NameWine=?, Style=?, id_store=?,Price=? WHERE id_Wine=? ");
        $sentencia->execute(array($namewine, $style, $id_store, $price, $id));
        
    }
}
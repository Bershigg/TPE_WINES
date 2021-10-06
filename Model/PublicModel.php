<?php

class PublicModel{

    private $db;
    function __construct(){
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=db_wine;charset=utf8', 'root', ''); 
    }

    function getWines()  {
        $sentencia = $this->db->prepare( "SELECT a.*, b.*
                                            FROM wines a
                                            LEFT JOIN stores b
                                            ON a.id_store = b.id_store");
        $sentencia->execute();
        $wines = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $wines;
    } 
    
    function getStore(){
        $sentencia = $this->db->prepare("SELECT * from stores");
        $sentencia->execute();
        $store = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $store;   
    }

    function storeSelected($id){
        $sentencia = $this->db->prepare( "SELECT a.*, b.*
                                            FROM wines a
                                            LEFT JOIN stores b
                                            ON a.id_store = b.id_store
                                            WHERE NameStore=?");
        $sentencia->execute(array($id));
        $winesForStore = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $winesForStore;
    }

    function getWine($id)  {
        $sentencia = $this->db->prepare( "SELECT a.*, b.*
                                            FROM wines a
                                            LEFT JOIN stores b
                                            ON a.id_store = b.id_store where NameWine=?");
        $sentencia->execute(array($id));
        $wines = $sentencia->fetch(PDO::FETCH_OBJ);
        return $wines;
    }

  
}



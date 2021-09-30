<?php

class WineModel{

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
    
    function insertWine($nameWine, $style, $id_store, $price)   {
        $sentencia = $this->db->prepare("INSERT INTO wines(NameWine, Style, id_store, Price) VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($nameWine, $style, $id_store, $price));
    }

    /*function getTasks(){
        $sentencia = $this->db->prepare("SELECT * FROM tareas");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
        
    }

    function insertTask($titulo, $descripcion, $prioridad, $finalizada){
        
        $sentencia = $this->db->prepare("INSERT INTO tareas(titulo, descripcion, prioridad, finalizada) VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($titulo, $descripcion, $prioridad, $finalizada));
    } */

    function getStore(){
        $sentencia = $this->db->prepare("SELECT * from stores");
        $sentencia->execute();
        $store = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $store;
        
    }

    function storeSelected($id){
        $sentencia = $this->db->prepare("SELECT * from wines WHERE id_store=?");
        $sentencia->execute(array($id));
        $winesForStore = $sentencia->fetch(PDO::FETCH_OBJ);
        return $winesForStore;
    }

    function getWine($id)  {
        $sentencia = $this->db->prepare( "SELECT a.*, b.*
                                            FROM wines a
                                            LEFT JOIN stores b
                                            ON a.id_store = b.id_store
                                            WHERE id_store=?");

        $sentencia->execute(array($id));
        $wine = $sentencia->fetch(PDO::FETCH_OBJ);
        return $wine;
    }

}



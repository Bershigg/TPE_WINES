<?php

class CommentModel{

    private $db;
    function __construct(){
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=db_wine;charset=utf8', 'root', ''); 
    }

    function getComments(){ 
    }

    function deleteComment(){ 
    }

    function getComment(){ 
    }

    function insertComment(){ 
    }
}
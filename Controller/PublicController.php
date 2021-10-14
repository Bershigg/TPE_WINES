<?php
require_once "./Model/PublicModel.php";
require_once "./View/PublicView.php";

class PublicController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new PublicModel();
        $this->view = new PublicView();
    }
    
    function start() {
        $this->view->start();
    }

    function showHome() {
        $this->view->showHome();
    }
    function showWines() {
        $wines = $this->model->getWines();
        $this->view->showWines($wines);
    }

    function showListStore(){
        $store = $this->model->getStore();
        $this->view->showStore($store);
             
    }

    function winesForStore($id){
        $vinosporbodega = $this->model->storeSelected($id);
        $this->view->showWinesForStore($vinosporbodega);
        
    }   

    function viewWine($id){
        $vino = $this->model->getWine($id);
        if ($vino->Style == 'Tinto'){
            $descripcion = 'El vino tinto, esta elaborado con uvas de piel oscura en lugar de uvas de piel clara. Durante la elaboración del vino tinto, el enólogo permite que el mosto exprimido, llamado mosto, macere y fermente con los hollejos de uva oscura, lo que aporta color, sabor y tanino al vino.';            
        } else if ($vino->Style == 'Blanco'){
            $descripcion = 'El vino blanco es uno de los vinos que se puede acompañar con cualquier alimento y tiene la ventaja de tomarse frío o a temperatura ambiente. El poco contacto con la piel de la uva durante la producción, hacen que este vino tenga un color que va del transparente hasta una tonalidad ámbar.';            
        } else{
            $descripcion = 'Un rosado es, básicamente, un vino tinto con poca maceración. Proviene de uvas negras (o mezcla de uvas negras y blancas) y la tonalidad del rosado dependerá del tiempo de maceración: a menor tiempo, color más tenue y blanquecino; y a mayor tiempo de maceración, color más púrpura o violáceo.';
        }
        $this->view->showWine($vino, $descripcion);
    }



}
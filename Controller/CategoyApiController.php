<?php


require_once "./Model/CategoryModel.php";
require_once "./View/ProductApiView.php";


class CategoryApiController {

    //el model product voló!
    private $modelCategory;
    private $view;
    private $AuthHelper;

    function __construct(){
        
        $this->model = new CategoryModel();
        $this->view = new ProductApiView();
        $this->AuthHelper = new AuthHelper();
    }

    function getStores(){
        $stores = $this->model->getStore();
        return $this->view->response($stores, 200);
    }

    function getStore($params = null) {
        $idStore = $params[":ID"];
        $Store = $this->model->getStore($idStore);
        if ($Store) {
            return $this->view->response($Store, 200);
        } else {
            return $this->view->response("el vino con el id=$idStore no existe", 404);
        }
    }

    function deleteStore($params = null) {
        $idStore = $params[":ID"];
        $Store = $this->model->getStore($idStore);

        if ($Store) {
            $this->model->deleteStore($idStore);
            return $this->view->response("La bodega con el id=$idStore fue borrada", 200);
        } else {
            return $this->view->response("La bodega con el id=$idStore no existe", 404);
        }
    }

    function createStore($params = null) {
        // obtengo el body del request (json)
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)

        $idStore = $this->model->insertStore($body->NombreBodega); 
        if ($idStore != 0) {
            $this->view->response("La bodega se insertó con el id=$idStore", 200);
        } else {
            $this->view->response("La bodega no se pudo insertar", 500);
        }
    }

    function updateStore($params = null) {
        $idStore = $params[':ID'];
        $body = $this->getBody();
        
        // TODO: VALIDACIONES -> 400 (Bad Request) 

        $Store = $this->model->getStore($idStore);

        if ($Store) {                                                    
            $this->model->updateStore($idStore, $body->NombreBodega);
            $this->view->response("La bodega se actualizó correctamente", 200);
        } else {
            return $this->view->response("La bodega con el id=$idStore no existe", 404);
        }
    }






     // Devuelve el body del request
   
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }


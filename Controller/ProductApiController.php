<?php

require_once "./Model/ProductModel.php";

require_once "./View/ProductApiView.php";


class ProductApiController {

    private $modelProduct;
    
    private $view;
    private $AuthHelper;

    function __construct(){
        $this->model = new ProductModel();
       //el model categoy voló!
        $this->view = new ProductApiView();
        $this->AuthHelper = new AuthHelper();
    }

    function getWines(){
        $wines = $this->model->getWines();
        return $this->view->response($wines, 200);
    }

    function getWine($params = null) {
        $idWine = $params[":ID"];
        $Wine = $this->model->getWine($idWine);
        if ($Wine) {
            return $this->view->response($wine, 200);
        } else {
            return $this->view->response("el vino con el id=$idWine no existe", 404);
        }
    }

    function deleteWine($params = null) {
        $idWine = $params[":ID"];
        $Wine = $this->model->getWine($idWine);

        if ($Wine) {
            $this->model->deleteWine($idWine);
            return $this->view->response("El vino con el id=$idWine fue borrado", 200);
        } else {
            return $this->view->response("El vino con el id=$idWine no existe", 404);
        }
    }

    function createWine($params = null) {    // no entiendo por que el paramtro si estamos creando un vino nuevo.
        // obtengo el body del request (json)
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)

        $idWine = $this->model->insertWine($body->Nombre, $body->Estilo, $body->Bodega, $body->Precio); //se carga desde form por eso va $body->Nombre (como esta en el input del form)?
        if ($idWine != 0) {
            $this->view->response("El vino se insertó con el id=$idWine", 200);
        } else {
            $this->view->response("El vino no se pudo insertar", 500);
        }
    }

    function updateWine($params = null) {
        $idWine = $params[':ID'];
        $body = $this->getBody();
        
        // TODO: VALIDACIONES -> 400 (Bad Request)  -----> aca va lo de isset??

        $Wine = $this->model->getWine($idWine);

        if ($Wine) {                                                        // aca le pasamos un string y espera un int.
            $this->model->updateWine($idWine, $body->Nombre, $body->Estilo, $body->Bodega, $body->Precio);
            $this->view->response("El vino se actualizó correctamente", 200);
        } else {
            return $this->view->response("El vino con el id=$idWine no existe", 404);
        }
    }






     // Devuelve el body del request
   
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }








}

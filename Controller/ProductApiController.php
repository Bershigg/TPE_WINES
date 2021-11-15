<?php

require_once "./Model/ProductModel.php";
require_once "./Model/CategoryModel.php";
require_once "./View/ProductApiView.php";


class ProductApiController {

    private $modelProduct;
    private $modelCategory;
    private $view;
    private $AuthHelper;

    function __construct(){
        $this->modelProduct = new ProductModel();
        $this->modelCategory = new CategoryModel();
        $this->view = new ProductApiView();
        $this->AuthHelper = new AuthHelper();
    }
}

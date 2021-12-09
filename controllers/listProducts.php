<?php
require_once "IControlador.php";
require_once "models/product.php";

class listProducts implements IControlador
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function processRequest(){
        $productList = $this -> product -> getProducts();
        require "views/listProducts.php";
    }

}

?>

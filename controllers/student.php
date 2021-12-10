<?php
require_once "IControlador.php";
require_once "models/product.php";

class Student implements IControlador
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function processRequest()
    {
        $products = $this->product->getProducts();
        require "views/student.php";
    }
}

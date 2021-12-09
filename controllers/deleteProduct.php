<?php
require_once "IControlador.php";
require_once "models/product.php";

class DeleteProduct implements IControlador
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function processRequest()
    {
        try {

            if (isset($_GET['id'])) {
                
                $this->product->deleteProduct($_GET['id']);
            }

            header('Location:list_products', true, 302);
        } catch (string $e) {
            header('Location:list_products', true, 302);
        }
    }

}

<?php
require_once "IControlador.php";
require_once "models/product.php";

class EditProduct implements IControlador
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function processRequest()
    {
        $productList = $this -> product -> getProductById($_GET["id"]);
        require "views/editProduct.php";
    }

    public function editProductsForm()
    {
        try {
            if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['unit_price']) && isset($_POST['quantity']) && isset($_FILES['image'])) {
                $image = $_FILES['image']['tmp_name'];
                $img = file_get_contents($image);
                $idProd= intval($_POST["idProduct"]);

                $this->product->setId($idProd);
                $this->product->setName($_POST['name']);
                $this->product->setDescription($_POST['description']);
                $this->product->setQuantity($_POST['quantity']);
                $this->product->setUnitPrice($_POST['unit_price']);
                $this->product->setImage($img);

                $this->product->editProduct();
                
            }
            header('Location:list_products?is_success_registration=true', true, 302);
        } catch (string $e) {
            header('Location:edit_product?is_success_registration=false', true, 302);
        }
    }
}

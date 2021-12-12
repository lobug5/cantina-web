<?php
require_once "IControlador.php";
require_once "models/product.php";
require_once "models/wallet.php";

class Student implements IControlador
{
    private $product;
    private $wallet;

    public function __construct()
    {
        $this->product = new Product();
        $this->wallet = new Wallet();
    }

    public function processRequest()
    {
        $idStudent = (int)$_SESSION['auth_id_student'];
        
        $products = $this->product->getProducts();
        $walletStudent = $this-> wallet->getBalanceById($idStudent);
        require "views/student.php";
    }
}

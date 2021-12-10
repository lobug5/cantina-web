<?php

require_once "models/CartSession.php";
require_once "models/CartItem.php";
require_once "IControlador.php";


class AddCartItem implements IControlador{

    private $cartSession;

    public function __construct($cartSession){
        $this->cartSession = $cartSession;
    }

    public function processRequest(){
        if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])){

            $cartItem = new CartItem($_POST['id'],1);

            $this->cartSession->addProduct($CartItem);
        }
        header('Location:cart', true,302);
    }
}



?>
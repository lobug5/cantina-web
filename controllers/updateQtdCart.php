<?php

require_once "models/CartSession.php";
require_once "models/CartItem.php";
require_once "IControlador.php";

class UpdateQtdCart implements IControlador{

    private $cartSession;

    public function __construct($cartSession){
        $this->cartSession = $cartSession;
    }

    public function processRequest(){
        if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])) {

            $cartItem = new CartItem($_POST['id'],$_POST['quantity']);

            $this->cartSession->updateCart($cartItem);
        }
        header('Location:cart', true,302);

     }

}

?>
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
        
        $CartItem = $this->cart->getItensCart();
        $cart = $this->cart;
        require "views/listCart.php";
    }
}



?>
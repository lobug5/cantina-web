<?php

require_once "models/cartSession.php";
require_once "models/cartItem.php";
require_once "IControlador.php";


class ListCarts implements IControlador
{

    private $cartSession;

    public function __construct($cartSession)
    {
        $this->cartSession = $cartSession;
    }

    public function processRequest()
    {

        $CartItem = $this->cartSession->getItensCart();
        $cart = $this->cartSession;
        require "views/listCart.php";
    }
}

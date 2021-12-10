<?php

require_once "models/cartSession.php";
require_once "models/cartItem.php";
require_once "IControlador.php";


class AddCartItem implements IControlador
{

    private $cartSession;

    public function __construct($cartSession)
    {
        $this->cartSession = $cartSession;
    }

    public function processRequest()
    {
        if (isset($_POST['id']) && preg_match("/^[0-9]+/", $_POST['id']) && isset($_POST['quantity'])) {

            $cartItem = new CartItem($_POST['id'], $_POST['quantity']);

            echo $_POST['quantity'];

            $this->cartSession->addProduct($cartItem);
        }
        header('Location:cart', true, 302);
    }
}

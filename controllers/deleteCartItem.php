<?php

require_once "models/cartSession.php";
require_once "models/cartItem.php";
require_once "IControlador.php";

class DeleteCartItem implements IControlador
{

    private $cartSession;

    public function __construct($cartSession)
    {
        $this->cartSession = $cartSession;
    }

    public function processRequest()
    {
        if (isset($_POST['id']) && preg_match("/^[0-9]+/", $_POST['id'])) {

            $this->cartSession->deleteProductCart($_POST['id']);
        }
        header('Location:cart', true, 302);
    }
}

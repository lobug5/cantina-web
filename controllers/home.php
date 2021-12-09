<?php
require_once "IControlador.php";

class Home implements IControlador
{
    public function processRequest()
    {
        require "views/home.php";
    }
}

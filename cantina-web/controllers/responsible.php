<?php
require_once "IControlador.php";

class Responsible implements IControlador
{
    public function processRequest()
    {
        require "views/responsible.php";
    }
}

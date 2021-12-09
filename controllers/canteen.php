<?php
require_once "IControlador.php";

class Canteen implements IControlador
{
    public function processRequest()
    {
        require "views/canteen.php";
    }
}

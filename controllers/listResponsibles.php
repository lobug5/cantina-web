<?php
require_once "IControlador.php";
require_once "models/responsible.php";

class listResponsibles implements IControlador
{
    private $responsible;

    public function __construct()
    {
        $this->responsible = new Responsible();
    }

    public function processRequest(){
        $responsibleList = $this -> responsible -> getResponsibles();
        require "views/listResponsibles.php";
    }

}

?>

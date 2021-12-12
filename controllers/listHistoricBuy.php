<?php
require_once "IControlador.php";
require_once "models/buy.php";

class ListHistoricBuy implements IControlador
{
    private $buy;

    public function __construct()
    {
        $this->buy = new Buy();
    }

    public function processRequest(){
        $buyList = $this -> buy -> getBuys();
        require "views/listBuyHistoric.php";
    }

}

?>

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
        $idStudent = $_SESSION['auth_id_student'];
        $buyList = $this -> buy -> getBuys($idStudent);
        require "views/listBuyHistoric.php";
    }

}

?>

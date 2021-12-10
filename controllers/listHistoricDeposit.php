<?php
require_once "IControlador.php";
require_once "models/deposit.php";

class ListHistoricDeposit implements IControlador
{
    private $deposit;

    public function __construct()
    {
        $this->deposit = new Deposit();
    }

    public function processRequest(){
        $depositList = $this -> deposit -> getDeposits();
        require "views/listHistoricDeposit.php";
    }

}

?>

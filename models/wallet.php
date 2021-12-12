<?php
include_once 'controllers/encrypt.php';
require_once 'walletDAO.php';

class Wallet
{
    private $id;
    private $balance;
    private $idResponsible;
    private $idStudent;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdResponsible($idResponsible)
    {
        $this->idResponsible = $idResponsible;
    }

    public function getIdResponsible()
    {
        return $this->idResponsible;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setIdStudent($idStudent)
    {
        $this->idStudent = $idStudent;
    }

    public function getIdStudent()
    {
        return $this->idStudent;
    }

    public function addWallet()
    {
        $wallet = new WalletDAO();
        $wallet->setWallet($this);
    }

    public function getBalanceById($idStudent){
        $wallet = new WalletDAO();
        return $wallet->getBalanceById($idStudent);
    }

}
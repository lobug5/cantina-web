<?php
include_once 'controllers/encrypt.php';
require_once 'depositDAO.php';

class Deposit
{
    private $id;
    private $dateDeposit;
    private $price;
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

    public function setDateDeposit($dateDeposit)
    {
        $this->dateDeposit = $dateDeposit;
    }

    public function getDateDeposit()
    {
        return $this->dateDeposit;
    }

    public function setprice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setIdResponsible($idResponsible)
    {
        $this->idResponsible = $idResponsible;
    }

    public function getIdResponsible()
    {
        return $this->idResponsible;
    }

    public function setIdStudent($idStudent)
    {
        $this->idStudent = $idStudent;
    }

    public function getIdStudent()
    {
        return $this->idStudent;
    }
    public function setNameStudent($nameStudent)
    {
        $this->nameStudent = $nameStudent;
    }

    public function getNameStudent()
    {
        return $this->nameStudent;
    }

    public function addDeposit()
    {
        $deposit = new DepositDAO();
        $deposit->addDeposit($this);
    }

    public function getDeposits()
    {
        $deposit = new DepositDAO();
        return $deposit->getDeposits();
    }
}

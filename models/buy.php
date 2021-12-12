<?php
include_once 'controllers/encrypt.php';
require_once 'buyDAO.php';

class Buy{
    
    private $id;
    private $idProduct;
    private $idStudent;
    private $quantity;
    private $value_total;

    public function getId(){
        return $this->id;
    }   

    public function setId($id){
        $this->id = $id;
    }

    public function getIdProduct(){
        return $this->idProduct;
    }   

    public function setIdProduct($idProduct){
        $this->idProduct = $idProduct;
    }
    public function getIdStudent(){
        return $this->idStudent;
    }   

    public function setIdStudent($idStudent){
        $this->idStudent = $idStudent;
    }
    public function getNameStudent(){
        return $this->nameStudent;
    }   

    public function setNameStudent($nameStudent){
        $this->nameStudent = $nameStudent;
    }
    public function getNameProduct(){
        return $this->nameProduct;
    }   

    public function setNameProduct($nameProduct){
        $this->nameProduct = $nameProduct;
    }


    public function getQuantity(){
        return $this->quantity;
    } 

    public function setQuantity($quantity){
        $this->quatity = $quantity;
    }
    public function getValueTotal(){
        return $this->value_total;
    } 

    public function setValueTotal($value_total){
        $this->quatity = $value_total;
    }

    public function getBuys()
    {
        $buy = new BuyDAO();
        return $buy->getBuys();
    }

}

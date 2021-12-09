<?php 

require_once "product.php";

class CartItem{

    private $product;
    private $quantity;

    public function __construct($id, $quantity){
        $this->product = new Product();
        $this->product->setId($id);
        $this->product->getProductById();
        $this->quantity = $quantity;
    }

    public function getProduct(){
        return $this->product;
    }   

    public function setProduct($product){
        $this->product = $product;
    }

    public function getQuantity(){
        return $this->quantity;
    } 

    public function setQuantity($quantity){
        $this->quatity = $quantity;
    }

    public function getTotalPartial(){
        return $this->product->getUnitPrice() * $this->quantity;
    }


}

?>
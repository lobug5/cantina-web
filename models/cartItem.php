<?php

require_once "product.php";

class CartItem
{

    private $product;
    private $quantity;

    public function __construct($id, $quantity)
    {
        $this->product = new Product();
        $product = $this->product->getProductById($id);

        echo $product->getName();
        $this->product->setName($product->getName());
        $this->product->setQuantity($product->getQuantity());
        $this->product->setUnitPrice($product->getUnitPrice());
        $this->product->setId($product->getId());
        $this->product->setImage($product->getImage());

        $this->quantity = $quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quatity = $quantity;
    }

    public function getTotalPartial()
    {
        return $this->product->getUnitPrice() * $this->quantity;
    }
}

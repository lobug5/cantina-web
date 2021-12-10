<?php

// INTERFACE

interface ICart{
    public function addProduct($item);
    public function updateCart($item);
    public function deleteProductCart($id);
    public function getTotal();
    public function getItensCart();
    public function inCart($id);
}

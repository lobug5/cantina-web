<?php 

require_once "ICart.php";
require_once "CartItem.php";

class CartSession implements ICart{

    private $itens = array();

    public function __construct(){
        $this->itens = $this->restore();
     }

    public function inCart($id){
        return isset($this->itens[$id]);
    }

    public function addProduct($item){
        
        $id = $item->getProduct()->getId();
        if (!$this->inCart($id)){
            $this->itens[$id] = $item;
        } else {
            $this->itens[$id]->setQuantity($this->itens[$id]->getQuantity()+1);
        }

    }

    public function updateCart($item){

        $id = $item->getProduct()->getId();
        if ($this->inCart($id)){
           if ($item->getQuantity()==0){
               $this->deleteProductCart($id);
               return;
           }
           $this->itens[$id] = $item;
        }
    }

    public function deleteProductCart($id){
 
        if ($this->inCart($id))
            unset($this->itens[$id]);
       }
    }

    public function getTotal(){

        $total = 0;
        foreach($this->itens as $item){
            $total += $item->getTotalPartial();
        }
        return $total;
    }

    public function getItensCart(){
        return $this->itens;
    }

    public function __destruct(){

        $_SESSION['carrinho2'] = serialize($this->itens);
    }

    public function restore(){

        if (isset($_SESSION['carrinho2'])){
            return unserialize($_SESSION['carrinho2']);
        }
        else
          return array(); 
 
    }

}


?>
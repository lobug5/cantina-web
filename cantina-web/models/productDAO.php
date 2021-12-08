<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';
include_once 'models/auth.php';
include_once 'models/product.php';

class ProductDAO
{
    public function getProducts()
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.products";
            $sql = $connection->prepare($query);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $products = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $product = new Product();
                $product->setId($items['id']);
                $product->setName($items['name']);
                $product->setDescription($items['description']);
                $product->setQuantity($items['quantity']);
                $product->setUnitPrice($items['unit_price']);
                $product->setImage($items['image']);
                array_push($products, $product);
            }
            return $products;
        } catch (PDOException $e) {
            return array();
        }
    }

    public function setProduct(Product $product)
    {
        try {
            $connection = Connection::getConexao();

            $query = "insert into cantina_web.products (name, description, quantity, unit_price, image) values (:name, :description, :quantity, :unit_price, :image)";
            $sql = $connection->prepare($query);

            $name =  $product->getName();
            $description =  $product->getDescription();
            $quantity =  $product->getQuantity();
            $unitPrice =  $product->getUnitPrice();
            $image =  $product->getImage();

            $sql->bindParam("name", $name);
            $sql->bindParam("description", $description);
            $sql->bindParam("quantity", $quantity);
            $sql->bindParam("unit_price", $unitPrice);
            $sql->bindParam("image", $image);

            $sql->execute();

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function deleteProduct($id){
        
        try{
            $connection = Connection::getConexao();

            $query = "delete from products where id = :id";
            $sql = $connection->prepare($query);

            $sql->bindParam("id", $id);

            $sql->execute();

            return true;

        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function editProduct(Product $product)
    {
        try {
            $connection = Connection::getConexao();

            $query = "update into cantina_web.products (name, description, quantity, unit_price, image) values (:name, :description, :quantity, :unit_price, :image) where id= :id";
            $sql = $connection->prepare($query);

            $id =  $product->getId();
            $name =  $product->getName();
            $description =  $product->getDescription();
            $quantity =  $product->getQuantity();
            $unitPrice =  $product->getUnitPrice();
            $image =  $product->getImage();

            $sql->bindParam("id", $id);
            $sql->bindParam("name", $name);
            $sql->bindParam("description", $description);
            $sql->bindParam("quantity", $quantity);
            $sql->bindParam("unit_price", $unitPrice);
            $sql->bindParam("image", $image);

            $sql->execute();

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function getProductById($id)
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.products where id = :id";
            $sql = $connection->prepare($query);

            $sql->bindParam("id", $id);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $products = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $product = new Product();
                $product->setId($items['id']);
                $product->setName($items['name']);
                $product->setDescription($items['description']);
                $product->setQuantity($items['quantity']);
                $product->setUnitPrice($items['unit_price']);
                $product->setImage($items['image']);
                array_push($products, $product);
            }
            return $products[0];
        } catch (PDOException $e) {
            return array();
        }
    }

}

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

            $query = "select * from cantina_web.products where status = 1;";
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

            $query = "insert into cantina_web.products (name, description, quantity, unit_price, image, status) values (:name, :description, :quantity, :unit_price, :image, 1)";
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

    public function deleteProduct($id)
    {

        try {
            $connection = Connection::getConexao();

            $query = "update cantina_web.products SET status= 0 where id = :id";
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

            $query = "update cantina_web.products SET name = :name, description = :description,
                quantity = :quantity, unit_price = :unit_price, image = :image WHERE id = :id";
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

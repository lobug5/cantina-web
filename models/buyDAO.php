<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';
include_once 'models/buy.php';

class BuyDAO
{
   
    public function getBuys($idStudent)
    {
        try {
            $connection = Connection::getConexao();

            $query = "
            select  
                A.quantity,
                A.value_total,
                B.name,
                C.name as nameProduct
            from cantina_web.buy A 
            inner join student B 
            ON A.idStudent = B.id 
            inner join products C
            ON A.idProduct = C.id
            where idStudent = :id";
            
            $sql = $connection->prepare($query);

            $sql->bindParam("idStudent", $idStudent);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $buys = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $buy = new Buy();
                $buy->setQuantity($items['quantity']);
                $buy->setValueTotal($items['value_total']);
                $buy->setNameProduct($items['nameProduct']);
                $buy->setNameStudent($items['name']);
                array_push($buys, $buy);
            }
            return $buys;
        } catch (PDOException $e) {
            return array();
        }
    }



}
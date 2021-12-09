<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';
include_once 'models/auth.php';
include_once 'models/deposit.php';


class DepositDAO
{
    public function setProduct(Deposit $deposit)
    {
        try {
            $connection = Connection::getConexao();

            $query = "insert into cantina_web.deposit (date_deposit, price, idResponsible, idStudent) values (:date_deposit, :price, :idResponsible, :idStudent)";
            $sql = $connection->prepare($query);
            
            $date_deposit =  $deposit->getDateDeposit();
            $price =  $deposit->getPrice();
            $idResponsible =  $product->getIdResponsible();
            $idStudent =  $product->getIdStudent();

            $sql->bindParam("date_deposit", $date_deposit);
            $sql->bindParam("price", $price);
            $sql->bindParam("idResponsible", $idResponsible);
            $sql->bindParam("idStudent", $idStudent);

            $sql->execute();

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

}
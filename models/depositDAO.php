<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';
include_once 'models/deposit.php';
include_once 'models/wallet.php';
include_once 'models/walletDAO.php';


class DepositDAO
{
    public function addDeposit(Deposit $deposit)
    {
        try {
            $connection = Connection::getConexao();
            
            $query = "insert into cantina_web.deposit (date_deposit, price, idResponsible, idStudent) values (:date_deposit, :price, :idResponsible, :idStudent)";
            $sql = $connection->prepare($query);
            
            $date_deposit =  $deposit->getDateDeposit();
            $price =  $deposit->getPrice();
            $idResponsible =  $deposit->getIdResponsible();
            $idStudent =  (int)$deposit->getIdStudent();
            
            $sql->bindParam("date_deposit", $date_deposit);
            $sql->bindParam("price", $price);
            $sql->bindParam("idResponsible", $idResponsible);
            $sql->bindParam("idStudent", $idStudent);

            $sql->execute();

            $wallet = new Wallet();

            $studentWallet = $wallet->getBalanceById($idStudent);
            
            if(!$studentWallet) {
                
                $query = "insert into cantina_web.wallet (balance, idResponsible, idStudent) values (:balance, :idResponsible, :idStudent)";
                $sql = $connection->prepare($query);

                $balance = (int)$deposit->getPrice();
                $id_responsible = (int) $deposit->getIdResponsible();
                $id_student = (int)$deposit->getIdStudent();

                $sql->bindParam("balance", $balance);
                $sql->bindParam("idResponsible", $idResponsible);
                $sql->bindParam("idStudent", $idStudent);

                $sql->execute();

            }
            else {
                $query = "update cantina_web.wallet SET balance = :balance where idStudent = :idStudent";
                $sql = $connection->prepare($query);

                $balance = (int)$studentWallet->getBalance() + (int)$deposit->getPrice();
                $id_student = (int)$deposit->getIdStudent();
                
                $sql->bindParam("balance", $balance);
                $sql->bindParam("idStudent", $id_student, PDO::PARAM_INT);
                
                $sql->execute();
            }

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function getDeposits()
    {
        try {
            $connection = Connection::getConexao();

            $query = "
            select  
            DATE_FORMAT(A.date_deposit, '%d/%m/%Y %H:%m:%s') as date,
                A.price,
                A.idStudent,
                B.name
            from cantina_web.deposit A 
            inner join student B 
            ON A.idStudent = B.id 
            ORDER BY A.date_deposit DESC;";
            $sql = $connection->prepare($query);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $deposits = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $deposit = new Deposit();
                $deposit->setNameStudent($items['name']);
                $deposit->setDateDeposit($items['date']);
                $deposit->setPrice($items['price']);
                $deposit->setIdStudent($items['idStudent']);
                array_push($deposits, $deposit);
            }
            return $deposits;
        } catch (PDOException $e) {
            return array();
        }
    }



}
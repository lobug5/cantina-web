<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';
include_once 'models/wallet.php';

class WalletDAO
{
    public function setWallet(Wallet $wallet)
    {
        try {
            $connection = Connection::getConexao();

            $query = "insert into cantina_web.wallet (name, last_name, registration, cpf, idResponsible, status) values (:name, :last_name, :registration, :cpf, :idResponsible, 1)";
            $sql = $connection->prepare($query);

            $balance =  $wallet->getBalance();
            $idStudent =  $wallet->getIdStudent();
            $idResponsible =  (int)$wallet->getIdResponsible();
            
            $sql->bindParam("balance", $balance);
            $sql->bindParam("idStudent", $idStudent);
            $sql->bindParam("idResponsible", $idResponsible);
            
            $sql->execute();
            
            return $auth->setAuth();
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

  
    public function getBalanceById($idStudent)
    {
        try {
            $connection = Connection::getConexao();

            $query = 
                "select balance from cantina_web.wallet where idStudent = :id";
            $sql = $connection->prepare($query);

            $sql->bindParam("id", $idStudent);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $wallets = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $wallet = new Wallet();
                $wallet->setBalance($items['balance']);
                array_push($wallets, $wallet);
            }
            if(sizeof($wallets) == 0) {
                return $wallets;
            }
            else{
                return $wallets[0];
            }
        } catch (PDOException $e) {
            return array();
        }
    }

}
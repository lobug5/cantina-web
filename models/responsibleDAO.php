<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';
include_once 'models/responsible.php';
include_once 'models/auth.php';

class ResponsibleDAO
{
    public function getResponsibles()
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.responsible where status = 1";
            $sql = $connection->prepare($query);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $responsibles = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $responsible = new Responsible();
                $responsible->setId($items['id']);
                $responsible->setIdSchool($items['idSchool']);
                $responsible->setTypeDocument($items['type_document']);
                $responsible->setDocument($items['document']);
                $responsible->setName($items['name']);
                $responsible->setPhone($items['phone']);
                array_push($responsibles, $responsible);
            }
            return $responsibles;
        } catch (PDOException $e) {
            return array();
        }
    }

    public function setResponsible(Responsible $responsible)
    {
        try {
            $connection = Connection::getConexao();

            $query = "insert into cantina_web.responsible (idSchool, document, type_document, name, phone) values (:idSchool, :document, :type_document, :name, :phone)";
            $sql = $connection->prepare($query);

            $idSchool =  $responsible->getIdSchool();
            $document =  $responsible->getDocument();
            $typeDocument =  $responsible->getTypeDocument();
            $name =  $responsible->getName();
            $phone =  $responsible->getPhone();

            $sql->bindParam("idSchool", $idSchool);
            $sql->bindParam("document", $document);
            $sql->bindParam("type_document", $typeDocument);
            $sql->bindParam("name", $name);
            $sql->bindParam("phone", $phone);

            $sql->execute();
            $id = $connection->lastInsertId();

            $auth = new Auth();

            $auth->setEmail($responsible->getEmail());
            $auth->setPassword($responsible->getPassword());
            $auth->setPermission('responsible');
            $auth->setIdResponsible($id);

            return $auth->setAuth();
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function deleteResponsible($id){
        
        try{
            $connection = Connection::getConexao();
            
            $query = "update cantina_web.responsible SET status= 0 where id = :id";
            $sql = $connection->prepare($query);
            
            $sql->bindParam("id", $id, PDO::PARAM_INT);
            
            $sql->execute();

            return true;

        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function editResponsible(Responsible $responsible)
    {
        try {
            $connection = Connection::getConexao();
            
            $query = "update cantina_web.responsible SET document = :document, type_document = :type_document,
                 name = :name, phone = :phone WHERE id = :id";

            $sql = $connection->prepare($query);
            
            $id = $responsible->getId();
            $document =  $responsible->getDocument();
            $type_document =  $responsible->getTypeDocument();
            $name =  $responsible->getName();
            $phone =  $responsible->getPhone();
            
            $sql->bindParam("id", $id, PDO::PARAM_INT);
            $sql->bindParam("document", $document);
            $sql->bindParam("type_document", $type_document);
            $sql->bindParam("name", $name);
            $sql->bindParam("phone", $phone);
            
            $sql->execute();

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function getResponsibleById($id)
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.responsible where id = :id";
            $sql = $connection->prepare($query);

            $sql->bindParam("id", $id);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $responsibles = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $responsible = new Responsible();
                $responsible->setId($items['id']);
                $responsible->setIdSchool($items['idSchool']);
                $responsible->setTypeDocument($items['type_document']);
                $responsible->setDocument($items['document']);
                $responsible->setName($items['name']);
                $responsible->setPhone($items['phone']);
                array_push($responsibles, $responsible);
            }
            return $responsibles[0];
        } catch (PDOException $e) {
            return array();
        }
    }
}

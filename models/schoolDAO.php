<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';
include_once 'models/auth.php';

class SchoolDAO
{
    public function getSchools()
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.school";
            $sql = $connection->prepare($query);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $schools = array();
            while ($school = $sql->fetch(PDO::FETCH_ASSOC)) {
                $schoolItem = new School();
                $schoolItem->setIdSchool($school['id']);
                $schoolItem->setName($school['name']);
                $schoolItem->setAddress($school['address']);
                array_push($schools, $schoolItem);
            }
            return $schools;
        } catch (PDOException $e) {
            return array();
        }
    }

    public function setSchool(School $school)
    {
        try {
            $connection = Connection::getConexao();

            $query = "insert into cantina_web.school (name, address) values (:name, :address)";
            $sql = $connection->prepare($query);

            $name =  $school->getName();
            $address =  $school->getAddress();

            $sql->bindParam("name", $name);
            $sql->bindParam("address", $address);

            $sql->execute();
            $id = $connection->lastInsertId();

            $auth = new Auth();

            $auth->setEmail($school->getEmail());
            $auth->setPassword($school->getPassword());
            $auth->setPermission('school');
            $auth->setIdSchool($id);

            return $auth->setAuth();
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
}

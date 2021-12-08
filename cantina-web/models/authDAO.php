<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';

class AuthDAO
{

    public function setAuth(Auth $auth)
    {
        try {
            $connection = Connection::getConexao();

            $query = "insert into cantina_web.auth (idSchool, idResponsible, idStudent, email, password, permission) values (:idSchool, :idResponsible, :idStudent, :email, :password, :permission)";
            $sql = $connection->prepare($query);

            $name =  $auth->getIdSchool();
            $idSchool =  $auth->getIdSchool();
            $idResponsible =  $auth->getIdResponsible();
            $idStudent =  $auth->getIdStudent();
            $email =  $auth->getEmail();
            $password =  $auth->getPassword();
            $permission =  $auth->getPermission();

            $sql->bindParam("idSchool", $idSchool);
            $sql->bindParam("idResponsible", $idResponsible);
            $sql->bindParam("idStudent", $idStudent);
            $sql->bindParam("email", $email);
            $sql->bindParam("password", $password);
            $sql->bindParam("permission", $permission);

            $sql->execute();

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function login($email, $password)
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.auth where email = :email";
            $sql = $connection->prepare($query);

            $sql->bindParam("email", $email);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $authentications = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $auth = new Auth();
                $auth->setId($items['id']);
                $auth->setIdSchool($items['idSchool']);
                $auth->setIdResponsible($items['idResponsible']);
                $auth->setIdStudent($items['idStudent']);
                $auth->setPermission($items['permission']);
                $auth->setEmail($items['email']);
                $auth->setPassword($items['password']);
                array_push($authentications, $auth);
            }

            if (sizeof($authentications) > 0) {
                $authentication = $authentications[0];

                $passwordUser = safeDecrypt($authentication->getPassword());

                if ($passwordUser == safeEncrypt($password)) {
                    return $authentication;
                };
            }

            return null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getCredentialsResponsibleById($id) {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.auth where idResponsible = :id";
            $sql = $connection->prepare($query);

            $sql->bindParam("id", $id);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $credentials = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $authResponsible = new Auth();
                $authResponsible->setId($items['idResponsible']);
                $authResponsible->setEmail($items['email']);
                $authResponsible->setPassword($items['password']);
                array_push($credentials, $authResponsible);
            }
            return $credentials[0];
        } catch (PDOException $e) {
            return array();
        }
    }
}

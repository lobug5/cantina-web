<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';
include_once 'models/student.php';
include_once 'models/auth.php';

class studentDAO
{
    public function getStudents()
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.student";
            $sql = $connection->prepare($query);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $students = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $student = new Student();
                $student->setId($items['id']);
                $student->setName($items['name']);
                $student->setLastName($items['last_name']);
                $student->setRegistration($items['registration']);
                $student->setIdResponsible($items['idResponsible']);
                $student->setCpf($items['cpf']);
                array_push($students, $student);
            }
            return $students;
        } catch (PDOException $e) {
            return array();
        }
    }

    public function setStudent(Student $student)
    {
        try {
            $connection = Connection::getConexao();

            $query = "insert into cantina_web.student (name, last_name, registration, cpf, idResponsible) values (:name, :last_name, :registration, :cpf, :idResponsible)";
            $sql = $connection->prepare($query);

            $name =  $student->getName();
            $last_name =  $student->getLastName();
            $registration =  $student->getRegistration();
            $cpf =  $student->getCpf();
            $idResponsible =  $student->getIdResponsible();

            $sql->bindParam("name", $name);
            $sql->bindParam("last_name", $last_name);
            $sql->bindParam("registration", $registration);
            $sql->bindParam("cpf", $cpf);
            $sql->bindParam("idResponsible", $idResponsible);

            $sql->execute();
            $id = $connection->lastInsertId();

            $auth = new Auth();

            $auth->setEmail($student->getEmail());
            $auth->setPassword($student->getPassword());
            $auth->setPermission('student');
            $auth->setIdStudent($id);

            return $auth->setAuth();
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
}

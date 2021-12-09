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

    public function deleteStudent($id){
        
        try{
            $connection = Connection::getConexao();

            $query = "delete from student where id = :id";
            $sql = $connection->prepare($query);

            $sql->bindParam("id", $id);

            $sql->execute();

            return true;
            echo "oiii";
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function editStudent(Student $student)
    {
        try {
            $connection = Connection::getConexao();
            
            $query = "update cantina_web.student SET name = :name, last_name = :last_name, 
                    registration = :registration, cpf = :cpf WHERE id = :id";
                    
            $sql = $connection->prepare($query);
            
            $id = $student->getId();
            $name =  $student->getName();
            $last_name =  $student->getLastName();
            $registration =  $student->getRegistration();
            $cpf =  $student->getCpf();
            
            $sql->bindParam("name", $name);
            $sql->bindParam("last_name", $last_name);
            $sql->bindParam("registration", $registration);
            $sql->bindParam("cpf", $cpf);
            
            $sql->execute();

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function getStudentById($id)
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.student where id = :id";
            $sql = $connection->prepare($query);

            $sql->bindParam("id", $id);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $students = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $student = new Student();
                $student->setId($items['id']);
                $student->setName($items['name']);
                $student->setLastName($items['last_name']);
                $student->setRegistration($items['registration']);
                $student->setCpf($items['cpf']);
                array_push($students, $student);
            }
            return $students[0];
        } catch (PDOException $e) {
            return array();
        }
    }


}
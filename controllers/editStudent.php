<?php
require_once "IControlador.php";
require_once "models/student.php";

class Aleatorio implements IControlador
{
    private $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function processRequest()
    {
        $studentList = $this -> student -> getStudentById($_GET['id']);
        require "views/editStudent.php";
    }

    public function editStudentForm()
    {
        try {
            echo $_GET['id'];
            if (isset($_POST['name']) && isset($_POST['last_name']) && isset($_POST['registration']) && isset($_POST['cpf']) && isset($_POST['idResponsible']) 
            && isset($_GET['id']) ) {

                $this->student->setId($_GET["id"]);
                $this->student->setName($_POST['name']);
                $this->student->setLastName($_POST['last_name']);
                $this->student->setRegistration($_POST['registration']);
                $this->student->setCpf($_POST['cpf']);
                $this->student->setIdResponsible($_POST['idResponsible']);

                $this->student->editStudent();
                echo "oi";
                echo $idStudent;
            }
                
     //       header('Location:list_students?is_success_registration=true', true, 302);
        } catch (string $e) {
            echo "oi";
            header('Location:list_students?is_success_registration=false', true, 302);
        }
    }
}
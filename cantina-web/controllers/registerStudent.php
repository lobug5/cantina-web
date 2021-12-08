<?php
require_once "IControlador.php";
require_once "models/student.php";

class RegisterStudent implements IControlador
{
    private $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function processRequest()
    {
        try {
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['registration']) && isset($_POST['lastName']) && isset($_POST['cpf']) && isset($_POST['password'])) {

                $this->student->setIdResponsible($_SESSION['auth_id_responsible']);
                $this->student->setName($_POST['name']);
                $this->student->setEmail($_POST['email']);
                $this->student->setRegistration($_POST['registration']);
                $this->student->setLastName($_POST['lastName']);
                $this->student->setCpf($_POST['cpf']);
                $this->student->setPassword($_POST['password']);

                $this->student->addStudent();
            }
            header('Location:responsible?is_success_registration=true', true, 302);
        } catch (string $e) {
            header('Location:responsible?is_success_registration=false', true, 302);
        }
    }
}

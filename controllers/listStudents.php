<?php
require_once "IControlador.php";
require_once "models/student.php";
require_once "models/auth.php";

class listStudents implements IControlador
{
    private $student;
    private $auth;

    public function __construct()
    {
        $this->student = new Student();
        $this->auth = new Auth();
    }

    public function processRequest(){
        if($_SESSION['auth_id_responsible']){
            $idResponsible = (int)$_SESSION['auth_id_responsible'];
            $studentList = $this -> student -> getStudentByIdResponsible($idResponsible);
            $permission = $_SESSION["auth_permission"];

        }
        else {
            $studentList = $this -> student -> getStudents();
            $permission = $_SESSION["auth_permission"];
        }   
        
        require "views/listStudents.php";
    }

}

?>
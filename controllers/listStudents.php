<?php
require_once "IControlador.php";
require_once "models/student.php";

class listStudents implements IControlador
{
    private $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function processRequest(){
        $studentList = $this -> student -> getStudents();
        require "views/listStudents.php";
    }

}

?>
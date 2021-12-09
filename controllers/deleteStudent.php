<?php
require_once "IControlador.php";
require_once "models/student.php";

class DeleteStudent implements IControlador
{
    private $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function processRequest()
    {
        try {

            if (isset($_GET['id'])) {

                echo $_GET['id'];
                $this->student->deleteStudent($_GET['id']);
            }

            header('Location:list_students', true, 302);
        } catch (string $e) {
            header('Location:list_students', true, 302);
        }
    }

}
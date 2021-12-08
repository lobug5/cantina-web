<?php
require_once "IControlador.php";

class Student implements IControlador
{
    public function processRequest()
    {
        require "views/student.php";
    }
}

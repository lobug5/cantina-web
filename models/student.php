<?php
include_once 'controllers/encrypt.php';
require_once 'studentDAO.php';

class Student
{
    private $id;
    private $idResponsible;
    private $registration;
    private $cpf;
    private $name;
    private $lastName;
    private $email;
    private $password;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdResponsible($idResponsible)
    {
        $this->idResponsible = $idResponsible;
    }

    public function getIdResponsible()
    {
        return $this->idResponsible;
    }

    public function setRegistration($registration)
    {
        $this->registration = $registration;
    }

    public function getRegistration()
    {
        return $this->registration;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function addStudent()
    {
        $school = new StudentDAO();
        $school->setStudent($this);
    }

    public function getAllStudents(){
        $student = new StudentDAO();
        return $student->getStudents();
    }

    public function getStudents(){
        $studentDAO = new StudentDAO();
        return $studentDAO->getStudents();
    }

    public function deleteStudent($id){
        $studentDAO = new StudentDAO();
        return $studentDAO->deleteStudent($id);
    }

    public function editStudent(){
        $studentDAO = new StudentDAO();
        return $studentDAO->editStudent($this);
    }

    public function getStudentById($id){
        $studentDAO = new StudentDAO();
        return $studentDAO->getStudentById($id);
    }

}
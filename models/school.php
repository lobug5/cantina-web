<?php
include_once 'controllers/encrypt.php';
require_once 'schoolDAO.php';

class School
{
    private $idSchool;
    private $name;
    private $address;
    private $email;
    private $password;


    public function setIdSchool($idSchool)
    {
        $this->idSchool = $idSchool;
    }

    public function getIdSchool()
    {
        return $this->idSchool;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
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

    public function addSchool()
    {
        $school = new SchoolDAO();
        $school->setSchool($this);
    }

    public function getAllSchools()
    {
        $school = new SchoolDAO();
        return $school->getSchools();
    }
}

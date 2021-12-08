<?php
include_once 'controllers/encrypt.php';
require_once 'responsibleDAO.php';

class Responsible
{
    private $id;
    private $idSchool;
    private $document;
    private $typeDocument;
    private $name;
    private $phone;
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

    public function setIdSchool($idSchool)
    {
        $this->idSchool = $idSchool;
    }

    public function getIdSchool()
    {
        return $this->idSchool;
    }

    public function setDocument($document)
    {
        $this->document = $document;
    }

    public function getDocument()
    {
        return $this->document;
    }

    public function setTypeDocument($typeDocument)
    {
        $this->typeDocument = $typeDocument;
    }

    public function getTypeDocument()
    {
        return $this->typeDocument;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
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

    public function addResponsible()
    {
        $school = new ResponsibleDAO();
        $school->setResponsible($this);
    }

    public function getResponsibles()
    {
        $responsible = new ResponsibleDAO();
        return $responsible->getResponsibles();
    }    

    public function deleteResponsible($id){
        $responsibleDAO = new ResponsibleDAO();
        return $responsibleDAO->deleteResponsible($id);
    }

    public function editResponsible(){
        $responsibleDAO = new ResponsibleDAO();
        return $responsibleDAO->editResponsible($this);
    }

    public function getResponsibleById($id){
        $responsibledDAO = new ResponsibleDAO();
        return $responsibledDAO->getResponsibleById($id);
    }
}

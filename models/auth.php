<?php
include_once 'controllers/encrypt.php';
require_once 'authDAO.php';

class Auth
{
    private $id;
    private $idSchool;
    private $idResponsible;
    private $idStudent;
    private $permission;
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

    public function setIdResponsible($idResponsible)
    {
        $this->idResponsible = $idResponsible;
    }

    public function getIdResponsible()
    {
        return $this->idResponsible;
    }

    public function setPermission($permission)
    {
        $this->permission = $permission;
    }

    public function getPermission()
    {
        return $this->permission;
    }

    public function setIdStudent($idStudent)
    {
        $this->idStudent = $idStudent;
    }

    public function getIdStudent()
    {
        return $this->idStudent;
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
        $this->password = safeEncrypt($password);
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function login($email, $password)
    {
        $login = new AuthDAO();
        return $login->login($email, $password);
    }

    public function setAuth()
    {
        $auth = new AuthDAO();
        return $auth->setAuth($this);
    }

    public function getCredentialsResponsibleById($id) {
        $authDAO = new AuthDAO();
        return $authDAO->getCredentialsResponsibleById($id);
    }

}

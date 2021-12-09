<?php
require_once "IControlador.php";
require_once "models/responsible.php";

class RegisterResponsible implements IControlador
{
    private $responsible;

    public function __construct()
    {
        $this->responsible = new Responsible();
    }

    public function processRequest()
    {
        require "views/registerResponsible.php";
    }

    public function registerResponsibleForm()
    {
        try {
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['document']) && isset($_POST['phone']) && isset($_POST['documentType'])) {

                $this->responsible->setIdSchool($_SESSION['auth_id_school']);
                $this->responsible->setName($_POST['name']);
                $this->responsible->setEmail($_POST['email']);
                $this->responsible->setPhone($_POST['phone']);
                $this->responsible->setDocument($_POST['document']);
                $this->responsible->setTypeDocument($_POST['documentType']);
                $this->responsible->setPassword($_POST['password']);

                $this->responsible->addResponsible();
            }
            header('Location:register_responsible?is_success_registration=true', true, 302);
        } catch (string $e) {
            header('Location:register_responsible?is_success_registration=false', true, 302);
        }
    }
}

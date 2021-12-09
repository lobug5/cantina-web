<?php
require_once "IControlador.php";
require_once "models/school.php";

class RegistrationSchool implements IControlador
{
    private $school;

    public function __construct()
    {
        $this->school = new School();
    }

    public function processRequest()
    {
        try {
            if (isset($_POST['address_school']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])) {
                $this->school->setName($_POST['name']);
                $this->school->setAddress($_POST['address_school']);
                $this->school->setEmail($_POST['email']);
                $this->school->setPassword($_POST['password']);

                $this->school->addSchool();
            }
            header('Location:home?is_success_registration=true', true, 302);
        } catch (string $e) {
            header('Location:home?is_success_registration=false', true, 302);
        }
    }
}

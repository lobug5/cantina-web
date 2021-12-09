<?php
require_once "IControlador.php";
require_once "models/auth.php";
require_once "models/responsible.php";


class EditResponsible implements IControlador
{
    private $responsible;

    public function __construct()
    {
        $this->responsible = new Responsible();
        $this-> auth = new Auth();
    }

    public function processRequest()
    {
        $responsibleList = $this -> responsible -> getResponsibleById($_GET["id"]);
        $authResponsible = $this -> auth -> getCredentialsResponsibleById($_GET["id"]);
        require "views/editResponsible.php";
    }

    public function editResponsiblesForm()
    {
        try {

            if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['documentType']) && isset($_POST['document'])) {

                $idResp = intval($_POST["idResponsible"]);
                
                $this->responsible->setId($idResp);
                $this->responsible->setTypeDocument($_POST['documentType']);
                $this->responsible->setDocument($_POST['document']);
                $this->responsible->setName($_POST['name']);
                $this->responsible->setPhone($_POST['phone']);

                $this->responsible->editResponsible();
                
            }
            header('Location:list_responsibles?is_success_registration=true', true, 302);
        } catch (string $e) {
            header('Location:edit_responsible?is_success_registration=false', true, 302);
        }
    }
}

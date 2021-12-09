<?php
require_once "IControlador.php";
require_once "models/responsible.php";

class DeleteResponsible implements IControlador
{
    private $responsible;

    public function __construct()
    {
        $this->responsible = new Responsible();
    }

    public function processRequest()
    {
        try {
            if (isset($_GET['id'])) {

                $id = (int)$_GET['id'];
                $this->responsible->deleteResponsible($id);
            }

            header('Location:list_responsibles', true, 302);
        } catch (string $e) {
            header('Location:list_responsibles', true, 302);
        }
    }

}

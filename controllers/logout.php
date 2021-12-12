<?php
require_once "IControlador.php";
require_once "models/auth.php";
class Login implements IControlador
{
    private $auth;

    public function __construct()
    {
        $this->auth = new Auth();
    }

    public function processRequest()
    {
        try {
            session_start();
            session_destroy();
            header('Location: home');
            exit;
        } catch (string $e) {
            header('Location:home?is_success_registration=false', true, 302);
        }
    }
}

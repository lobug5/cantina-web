<?php
require_once "IControlador.php";
require_once "models/deposit.php";
require_once "models/student.php";

class RegisterDeposits implements IControlador
{
    private $deposit;
    private $student;

    public function __construct()
    {
        $this->deposit = new Deposit();
        $this->student = new Student();
    }

    public function processRequest()
    {
        $studentList = $this -> student -> getStudentByIdResponsible($_SESSION['auth_id_responsible']);
        require "views/registerDeposits.php";
    }

    public function registerDepositsForm()
    {
        try {
            if (isset($_POST['studentId']) && isset($_POST['price'])) {

                date_default_timezone_set('America/Sao_Paulo');
                $dateDeposit = date('Y-m-d H:i:s', time());

                $studentId= (int)$_POST['studentId'];
                $responsibleId = (int)$_SESSION['auth_id_responsible'];

                $this->deposit->setDateDeposit($dateDeposit);
                $this->deposit->setPrice($_POST['price']);
                $this->deposit->setIdResponsible($responsibleId);
                $this->deposit->setIdStudent($studentId);

                $this->deposit->addDeposit();
                
            }

            header('Location:list_historic_deposit?is_success_registration=true', true, 302);
        } catch (string $e) {
            header('Location:register_deposit?is_success_registration=false', true, 302);
        }
    }
}

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
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $auth = $this->auth->login($_POST['email'], $_POST['password']);
                if ($auth) {
                    $_SESSION['auth_id_school'] = $auth->getIdSchool();
                    $_SESSION['auth_id_responsible'] = $auth->getIdResponsible();
                    $_SESSION['auth_id_student'] = $auth->getIdStudent();
                    $_SESSION['auth_permission'] = $auth->getPermission();

                    switch ($auth->getPermission()) {
                        case 'school':
                            header('Location:canteen', true, 302);
                            break;
                        case 'responsible':
                            header('Location:responsible', true, 302);
                            break;
                        case 'student':
                            header('Location:student', true, 302);
                            break;
                        default:
                            header('Location:home?is_success_registration=false', true, 302);
                            break;
                    }
                } else {
                    header('Location:home?is_success_login=false', true, 302);
                }
            }
        } catch (string $e) {
            header('Location:home?is_success_registration=false', true, 302);
        }
    }
}

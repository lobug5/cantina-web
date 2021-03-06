<?php
$isSuccessRegistration = false;

if (isset($_GET['is_success_registration'])) {
    $isSuccessRegistration = strtolower($_GET['is_success_registration']) === 'true' ? true : false;
}
?>


<!DOCTYPE html>
<html lang="Pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3d7bdbec83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="js.js">


    <script>
    $(document).ready(function() {
        if (<?php echo $isSuccessRegistration ?>) {
            $('#notification_registration').fadeIn(1000);
            setTimeout(function() {
                $('#notification_registration').fadeOut(1000);
            }, 5000);
        }
    });
    </script>
</head>

<body>
    <section class="section-top">

        <div class="notification">
            <div class="container">
                <div class="alert alert-primary" id="notification_registration" style="display:none;">
                    Cadastro realizado com sucesso
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-xl navbar-togglable">
            <div class="container-fluid">
                <div class="logo">
                    <img class="navbar-brand-item light-mode-item" src="assets/images/logo.png" alt="logo">
                    <h1 class="title-logo"><span>CANTINA</span>WEB</h1>
                </div>
                <nav>
                    <input type="checkbox" id="menu-toggle" />
                    <label for="menu-toggle" class="menu-icon"><i class="fa fa-bars"></i></label>
                    <div class="slideout-sidebar">
                        <ul>
                            <li><a href="canteen">Home</a></li>
                            <li><a href="register_deposit">Dep??sito</a></li>
                            <li><a href="list_historic_deposit">Hist??rico Dep??sito</a></li>
                            <li><a href="home">Sair</a></li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <br>
        <br>
        <h1 class="Subtitulo_Resp"><span>Cadastro de Estudantes</span></h1>
        <br>
    </section>
    <hr>
    <hr>
    <div class="jumbotron">
        <h1></h1>
        <h5>Este ?? a ??rea onde os respons??veis podem cadastrar os alunos.
        </h5>
    </div>
    </div>
    <hr>
    <section>
        <div class="row">
            <div class="col">
                <div class="col-sm-6 offset-md-3">
                    <form name="register_student_form" method="post" action="register_student_form">
                        <div class="form-group">
                            <label for="inputStudentName">Nome</label>
                            <input required type="text" class="form-control" placeholder="Nome" name="name">
                        </div>
                        <div class="py-3">
                            <div class="form-group">
                                <label for="inputStudentLastName">Sobrenome</label>
                                <input required type="text" class="form-control" placeholder="Sobrenome" name="lastName">
                            </div>
                        <div class="py-3">
                            <div class="form-group">
                                    <label for="InputStudentRegistration">Matr??cula</label>
                                    <input required type="text" class="form-control" placeholder="Matricula" name="registration">
                            </div>
                        <div class="py-3">
                            <div class="form-group">
                                <label for="InputStudentCpft">CPF</label>
                                <input required type="text" class="form-control" placeholder="CPF" name="cpf">
                            </div>
                        <div class="py-3">
                            <div class="form-group">
                                    <label for="InputStudentEmail">Email</label>
                                    <input required type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                        <div class="py-3">
                            <div class="form-group">
                                <label for="inputStudentPassword">Senha</label>
                                <input required type="password" class="form-control" placeholder="Senha" name="password">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer mt-5 py-5">
        <div class="containerfoot">
            <div class="row justify-content-center">
                <div class="col-4">
                    <h4 class="footer-title">
                        Endere??o
                    </h4>
                    <h6 class="footer-title">
                        Rua x, numero 39
                    </h6>
                </div>
                <div class="col-4">
                    <h4 class="footer-title">
                        Fale conosco
                    </h4>
                    <h6 class="footer-title">
                        (71) 99999-9999
                    </h6>
                </div>
            </div>
        </div>
    </footer>
</body>

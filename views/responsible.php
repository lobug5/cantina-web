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
    <title>RESPONSÁVEL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3d7bdbec83.js" crossorigin="anonymous"></script>
    <script src="js.js"></script>

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

<body id="CorDefundo">

    <div class="notification">
        <div class="container">
            <div class="alert alert-primary" id="notification_registration" style="display:none;">
                Cadastro realizado com sucesso !
            </div>
        </div>
    </div>
    <section class="section-top">
        <nav class="navbar navbar-expand-xl navbar-togglable">
            <div class="container-fluid">
                <div class="logo">
                    <a href="logout"><img class="navbar-brand-item light-mode-item" src="assets/images/logo.png"
                            alt="logo"></a>
                    <h1 class="title-logo"><span>CANTINA</span>WEB</h1>
                </div>
                <nav>
                    <input type="checkbox" id="menu-toggle" />
                    <label for="menu-toggle" class="menu-icon"><i class="fa fa-bars"></i></label>
                    <div class="slideout-sidebar">
                        <ul>
                            <li><a href="register_deposit">Depósito</a></li>
                            <li><a href="list_historic_deposit">Histórico Depósito</a></li>
                            <li><a href="home">Sair</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <br>
        <br>
        <h1 class="Subtitulo_Resp"><span>Responsável</span></h1>
        <br>
    </section>
    <br>
    <div class="jumbotron">
        <h1></h1>
        <h5>Esta sessão tem como objetivo cadastrar e ver os alunos cadastrados para que possam usufruir dos benefícios
            oferecidos pela cantina da escola</h5>
    </div>
    </div>
    <br> 
    <form>
        <div class="row">
            <div class="col positionButtons">
                <div class="buttonAddProdutos form-check-inline">
                    <div class="iconeAddProdutos">
                        <img src="assets/images/icon_plus.svg" alt="+" />
                    </div>
                    <div class="textStyle">
                        <p><a href="list_students">Lista de Alunos Cadastrados</a></p>
                    </div>
                </div>
            </div>
            <div class="col positionButtons">
                <div class="buttonAddProdutos form-check-inline">
                    <div class="iconeAddProdutos">
                        <img src="assets/images/icon_plus.svg" alt="+" />
                    </div>
                    <div class="textStyle">
                        <p><a href="register_students">Cadastrar Aluno</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <footer class="footer mt-5 py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <h4 class="footer-title">
                        Endereço
                    </h4>
                    <h6 class="footer-title">
                        Rua Santo Antônio, número 39
                    </h6>
                </div>
                <div class="col-4">
                    <h4 class="footer-title">
                        Fale conosco
                    </h4>
                    <h6 class="footer-title">
                        (71) 99515-9412
                    </h6>
                </div>
            </div>
        </div>
  </footer>
    <script type="text/javascript">
    function Mudarestado(el) {
        document.getElementById(el).classList.toggle('mostrar');
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>
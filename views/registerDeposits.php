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
                    Deposito realizado com sucesso!
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
                            <li><a href="responsible">Home</a></li>
                            <li><a href="deposit">Depósito</a></li>
                            <li><a href="list_historic_deposit">Histórico Depósito</a></li>
                            <li><a href="logout">Sair</a></li>
                            </li>
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
    <hr>
    <hr>
    <div class="jumbotron">
        <h1></h1>
        <h5>Esta sessão é exclusivamente para realizar depósitos para que seus filhos utilizem na cantina da nossa escola !
        </h5>
    </div>
    </div>
    <hr>
    <Section>
        <div class="row">
            <div class="col">
                <div class="col-sm-6 offset-md-3">
                    <form name="register_deposit_form" method="post" action="register_deposit_form">
                        <div class="py-3">
                            <div class="form-group">
                                <label for="InputStudentSelected">Aluno</label>
                                <select required id="InputStudentSelected" name="studentId">
                                <option value=""></option>
                                <?php for($i=0;$i<count($studentList);$i++){ ?>
                                    <option value="<?php echo $studentList[$i]->getId(); ?>"><?php echo $studentList[$i]->getName(); ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDepositPrice">Valor</label>
                            <input name="price" class="form-control" id="inputDepositPrice"
                                placeholder="Ex. 10,00"  type="number" required>
                        </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-4">
                                        <button class="btn btn-primary mt-4" type="submit">Depositar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </Section>
    <footer class="footer mt-5 py-5">
        <div class="containerfoot">
            <div class="row justify-content-center">
                <div class="col-4">
                    <h4 class="footer-title">
                        Endereço
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

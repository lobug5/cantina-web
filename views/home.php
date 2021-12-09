<?php
$isSuccessRegistration = false;
$isErroLogin = false;

if (isset($_GET['is_success_registration'])) {
    $isSuccessRegistration = strtolower($_GET['is_success_registration']) === 'true' ? true : false;
}

if (isset($_GET['is_success_login'])) {
    $isErroLogin = strtolower($_GET['is_success_login']) === 'false' ? true : false;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
    <script>
    $(document).ready(function() {

        if (<?php echo $isErroLogin ?>) {
            $('#notification_login').fadeIn(1000);
            setTimeout(function() {
                $('#notification_login').fadeOut(1000);
            }, 5000);
        }
    });
    </script>


    </script>
    <title>CantinaWeb</title>
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

        <div class="notification">
            <div class="container">
                <div class="alert alert-danger" id="notification_login" style="display:none;">
                    Erro ao fazer o login, tente novamente.
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-xl navbar-togglable">
            <div class="container-fluid">
                <div id="logoIndex">
                    <img class="navbar-brand-item light-mode-item" src="assets/images/logo.png" alt="logo">
                    <h1 class="title-logo"><span>CANTINA</span>WEB</h1>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    <form name="login" method="post" action="login" class="d-flex">
                        <input name="email" class="form-control me-2" type="email" placeholder="Email"
                            aria-label="Search">
                        <input name="password" class="form-control me-2" type="password" placeholder="Senha"
                            aria-label="Search">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </nav>

        <section class="section-top-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h1 class="title-header">
                            CONTROLE SUA<br>
                            <span>CANTINA</span> ESCOLAR
                        </h1>
                        <h5 class="subtitle-header">
                            A cantina web tem com objetivo gerenciar seus produtos e agilizar os processos, ajudando
                            os
                            pais a cuidar
                            de perto
                            da alimentação de seus filhos</h5>
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-4">
                                    <a class="btn btn-primary mt-4" href="#cadastro">Cadastre-se</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-md-1">
                        <img class="image-header img-fluid" src="assets/images/header-image.png" alt="header-image">
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <h1 class="title text-center mb-5">
                        Quais as vantagens?
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card card-light text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5 pb-5">
                            <h5>Bloqueio de produtos</h5>
                            <div class="py-4">
                                <img class="image-card img-fluid" src="assets/images/block.png" alt="header-image">
                            </div>
                            <p class="text-muted">Lorem ipsum is placeholder text commonly used in the graphic, print,
                                and publishing
                                industries for previewing layouts and visual mockups</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card card-dark text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5 pb-5">
                            <h5>Redução de filas</h5>
                            <div class="py-4">
                                <img class="image-card img-fluid" src="assets/images/fila.png" alt="header-image">
                            </div>
                            <p class="text-muted">Lorem ipsum is placeholder text commonly used in the graphic, print,
                                and publishing
                                industries for previewing layouts and visual mockups</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card card-light text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5 pb-5">
                            <h5>Gestão financeira</h5>
                            <div class="py-4">
                                <img class="image-card img-fluid" src="assets/images/money.png" alt="header-image">
                            </div>
                            <p class="text-muted">Lorem ipsum is placeholder text commonly used in the graphic, print,
                                and publishing
                                industries for previewing layouts and visual mockups</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cadastro" class="section-singUp mt-5 mb-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <h1 class="title text-center mb-5">
                        Cadastre-se
                    </h1>
                </div>
            </div>
            <div class="col-sm-6 offset-md-3">
                <form name="registrationSchool" method="post" action="registration_school">
                    <div class="form-group">
                        <label for="inputSingUpName">Nome</label>
                        <input class="form-control" id="inputSingUpName" name="name" placeholder="Nome da escola"
                            required>
                        <div class="invalid-feedback">
                            Por favor digite o nome da escola
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="form-group">
                            <label for="inputSingUpAddress">Endereço</label>
                            <input name="address_school" class="form-control" id="inputSingUpAddress"
                                placeholder="Endereço da escola" required>
                            <div class="invalid-feedback">
                                Por favor digite o endereço da escola
                            </div>
                        </div>
                        <div class="py-3">
                            <div class="form-group">
                                <label for="InputSingupEmail1">Email</label>
                                <input type="email" class="form-control" name="email" id="InputSingupEmail1"
                                    placeholder="Email da escola" required>
                                <div class="invalid-feedback">
                                    Por favor digite o email da escola
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="form-group">
                                    <label for="InputSingUpPassword1">Senha</label>
                                    <input type="password" class="form-control" name="password"
                                        id="InputSingUpPassword1" placeholder="Senha" required>
                                    <div class="invalid-feedback">
                                        Por favor digite o senha
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <button class="btn btn-primary mt-4" type="submit">Cadastre-se</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer mt-5 py-5">
        <div class="container">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>

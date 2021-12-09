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
                    <a href="index.html"><img class="navbar-brand-item light-mode-item" src="assets/images/logo.png"
                            alt="logo"></a>
                    <h1 class="title-logo"><span>CANTINA</span>WEB</h1>
                </div>
                <nav>
                    <input type="checkbox" id="menu-toggle" />
                    <label for="menu-toggle" class="menu-icon"><i class="fa fa-bars"></i></label>
                    <div class="slideout-sidebar">
                        <ul>
                            <li><a href="canteen">Home</a></li>
                            <li><a href="list_products">Gerenciamento de Produtos</a></li>
                            <li><a href="Cantina-Responsaveis-Historico.html">Gerenciamento de Responsaveis</a></li>
                            <li><a href="index.html">Sair</a></li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <br>
        <br>
        <h1 class="Subtitulo_Resp"><span>Cadastro de Produtos</span></h1>
        <br>
    </section>
    <br>
    <div class="jumbotron">
        <h1></h1>
        <h5>Realize o cadastro de novos produtos para ficarem disponíveis na sua cantina !
        </h5>
    </div>
    </div>
    <br>
    <section>
        <div class="row">
            <div class="col">
                <div class="col-sm-6 offset-md-3">
                    <form name="register_products_form" method="post" enctype="multipart/form-data"
                        action="register_products_form">
                        <div class="form-group">
                            <label for="inputProductName">Nome</label>
                            <input required name="name" class="form-control" id="inputProductName"
                                placeholder="Nome do produto">
                        </div>
                        <div class="py-3">
                            <div class="form-group">
                                <label for="inputProductDesciption">Descrição</label>
                                <input required name="description" class="form-control" id="inputProductDesciption"
                                    placeholder="Descrição do produto">
                            </div>
                            <div class="py-3">
                                <div class="form-group">
                                    <label for="InputValueProduct">Valor</label>
                                    <input required name="price" type="number" class="form-control"
                                        id="InputValueProduct" placeholder="Ex. R$10,00">
                                </div>
                                <div class="py-3">
                                    <div class="form-group">
                                        <label for="InputQuantityProduct">Quantidade</label>
                                        <input required name="quantity" type="number" class="form-control"
                                            id="InputQuantityProduct" placeholder="Ex. 10">
                                    </div>
                                </div>
                                <div class="py-3">
                                    <div class="form-group">
                                        <label for="InputSingUpPassword1">Foto</label>
                                        <input required name="image" type="file" class="form-control"
                                            id="InputPictureProduct" placeholder="Senha">
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
        </div>
    </section>
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

</html>

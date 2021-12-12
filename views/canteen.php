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

</head>

<body>
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
                            <li><a href="canteen">Home</a></li>
                            <li><a href="list_responsibles">Gerenciar Responsáveis</a></li>
                            <li><a href="list_products"> Gerenciar Produtos</a>
                            <li><a href="list_students">Listagem de Alunos</a></li>
                            <li><a href="logout">Sair</a></li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <br>
        <br>
        <h1 class="Subtitulo_Resp"><span>Cantina</span></h1>
        <br>
    </section>
    <hr>
    <hr>
    <div class="jumbotron">
        <h1></h1>
        <h5>Este é a área da cantina onde os funcionários podem realizar o gerenciamento
            dos materiais da cantina e dos responsáveis.
        </h5>
    </div>
    </div>
    <hr>
    <br>
    <form>
        <div class="row">
            <div class="col positionButtons">
                <div class="buttonAddProdutos form-check-inline">
                    <div class="iconeAddProdutos">
                        <img src="assets/images/icon_plus.svg" alt="+" />
                    </div>
                    <div class="textStyle">
                        <p><a href="register_products">Cadastrar Produtos</a></p>
                    </div>
                </div>
                <div class="buttonAddProdutos form-check-inline">
                    <div class="iconeAddProdutos">
                        <img src="assets/images/icon_plus.svg" alt="+" />
                    </div>
                    <div class="textStyle">
                        <p><a href="register_responsible">Cadastrar Responsáveis</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
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

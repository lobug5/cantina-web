<!DOCTYPE html>
<html lang="Pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Aluno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3d7bdbec83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="js.js">

</head>

<body>
    <div id="CorDefundo">
        <section class="section-top">
            <nav class="navbar navbar-expand-xl navbar-togglable">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="index.html"><img class="navbar-brand-item light-mode-item" src="assets/images/logo.png" alt="logo"></a>
                        <h1 class="title-logo"><span>CANTINA</span>WEB</h1>
                    </div>
                    <nav>
                        <input type="checkbox" id="menu-toggle" />
                        <label for="menu-toggle" class="menu-icon"><i class="fa fa-bars"></i></label>
                        <div class="slideout-sidebar">
                            <ul>
                                <li><a href="aluno.html">Home</a></li>
                                <li><a href="Aluno-Historico.html">Histórico</a></li>
                                <li><a href="index.html">Sair</a></li>
                            </ul>
                        </div>
                    </nav>
                    <br>
                    <br>
        </section>

        <div class="container">
            <div class="jumbotron">
                <h1>Seu saldo é:</h1>
                <div id="minhaDiv">R$500,00</div>
                <p> </p>
                <p> </p>
                <h5>Faça seu pedido na opção comprar e retire no caixa quando sua matrícula for chamada!</h5>
            </div>
        </div>

        <div class="card-deck">
            <?php for ($i = 0; $i < count($products); $i++) { ?>
                <div class="card">
                    <?php echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode($products[$i]->getImage()) . '" />'; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $products[$i]->getName(); ?></h5>
                        <p class="card-text"><small class="text-dark">
                                <?php echo $products[$i]->getDescription(); ?>
                            </small> </p>
                        <p class="card-text"><strong class="text-info"><?php echo "R$ " . number_format($products[$i]->getUnitPrice(), 2, ',');  ?></strong></p>
                        <form method="post" action="add_item_cart">
                            <label for="quantity"></label>
                            <input type="hidden" name="id" value="<?php echo $products[$i]->getId(); ?>">
                            <input class="inptQuantidade" type="quantity" id="quantity" name="quantity" min="1" placeholder="0">
                            <button class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                Comprar
                            </button>
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>

        <form method="post" action="add_item_cart">
            <button id="buttonStudent" type="button" class="btn btn-primary btn-lg">Finalizar pedido</button>
        </form>
        <form method="post" action="add_item_cart">
            <button id="buttonStudent" type="button" class="btn btn-secondary btn-lg">Cancelar pedido</button>
        </form>
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
    </div>
</body>

</html>
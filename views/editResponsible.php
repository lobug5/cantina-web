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
                    <a href="index.html"><img class="navbar-brand-item light-mode-item" src="assets/images/logo.png"
                            alt="logo"></a>
                    <h1 class="title-logo"><span>CANTINA</span>WEB</h1>
                </div>
                <nav>
                    <input type="checkbox" id="menu-toggle" />
                    <label for="menu-toggle" class="menu-icon"><i class="fa fa-bars"></i></label>
                    <div class="slideout-sidebar">
                        <ul>
                            <li><a href="Cantina.html">Home</a></li>
                            <li><a href="list_products">Gerenciamento de Produtos</a></li>
                            <li><a href="list_responsibles">Gerenciamento de Responsaveis</a></li>
                            <li><a href="index.html">Sair</a></li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <br>
        <br>
        <h1 class="Subtitulo_Resp"><span>Edição de Responsaveis</span></h1>
        <br>
    </section>
    <br>
    <div class="jumbotron">
        <h1></h1>
        <h5>Atualize os dados de cadastro dos responáveis dos responsáveis!
        </h5>
    </div>
    </div>
    <br>
    <Section>
        <div class="row">
            <div class="col">
                <div class="col-sm-6 offset-md-3">
                    <form name="edit_responsible_form" id="edit_responsible_form" method="POST" action="edit_responsible_form">
                    <div class="form-group">
                            <input type="hidden" required name="idResponsible" class="form-control" id="inputResponsibleID" placeholder="ID do responsavel" value="<?php echo $responsibleList->getId() ?>">
                    </div> 
                    <div class="form-group">
                            <label for="inputResponsibleName">Nome</label>
                            <input name="name" class="form-control" id="inputResponsibleName"
                                placeholder="Nome do responsavel" value="<?php echo $responsibleList->getName() ?>">
                        </div>
                        <div class="py-3">
                            <div class="py-3">
                                <div class="form-group">
                                    <label for="inputResponsibleTelefone">Telefone</label>
                                    <input required name="phone" class="form-control" id="inputResponsibleTelefone"
                                        placeholder="(00)00000-0000" value="<?php echo $responsibleList->getPhone() ?>">
                                </div>
                                <div class="py-3">
                                    <div class="form-group">
                                        <label for="InputTypeDocument">Tipo do Documento</label>
                                        <select required id="InputTypeDocument" name="documentType">
                                            <option value="RG">RG</option>
                                            <option value="CPF">CPF</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <div class="form-group">
                                        <label for="InputNumberDocument">Número</label>
                                        <input required name="document" type="number" class="form-control"
                                            id="InputNumberDocument" placeholder="Número do Documento" 
                                            value="<?php echo $responsibleList->getDocument() ?>"
                                        >
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <button class="btn btn-primary mt-4" type="submit">Atualizar</button>
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

</html>

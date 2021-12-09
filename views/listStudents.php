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
              <li><a href="Cantina-Responsaveis-Historico.html">Gerenciamento de Responsáveis</a></li>
              <li><a href="index.html">Sair</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </nav>
    <br>
    <br>
    <h1 class="Subtitulo_Resp"><span>Lista de Alunos Cadastrados</span></h1>
    <br>
  </section>
  <br>
  <div class="jumbotron">
    <h1></h1>
    <h5>Nesta sessão são apresentados todos os alunos cadastrados pelo responsável</h5>
  </div>
  </div>

  <br>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>N° Matricula</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php for($i=0;$i<count($studentList);$i++){ ?>
          <tr>
            <td><?php echo $studentList[$i]->getId(); ?></td>
            <td><?php echo $studentList[$i]->getName(); ?></td>
            <td><?php echo $studentList[$i]->getLastName(); ?></td>
            <td><?php echo $studentList[$i]->getRegistration(); ?></td>
            <td><?php echo $studentList[$i]->getCpf(); ?></td>
                
            <td>
              <a href="edit_student?id=<?php echo $studentList[$i]->getId(); ?>"><i class="fas fa-edit"></i></a>
              <a href="delete_student?id=<?php echo $studentList[$i]->getId(); ?>"><i class="fas fa-user-minus"></i></a>
              </td></a>
              <td>
              </td>
          </tr>  
        <?php } ?>
   
    </table>
  
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
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>
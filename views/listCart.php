<!DOCTYPE html>
<html lang="Pt-Br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho</title>
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
          <a href="logout"><img class="navbar-brand-item light-mode-item" src="assets/images/logo.png" alt="logo"></a>
          <h1 class="title-logo"><span>CANTINA</span>WEB</h1>
        </div>
        <nav>
          <input type="checkbox" id="menu-toggle" />
          <label for="menu-toggle" class="menu-icon"><i class="fa fa-bars"></i></label>
          <div class="slideout-sidebar">
            <ul>
              <li><a href="canteen">Home</a></li>
              <li><a href="list_responsibles">Gerenciamento de Responsáveis</a></li>
              <li><a href="logout">Sair</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </nav>
    <br>
    <br>
    <h1 class="Subtitulo_Resp"><span>Carrinho de Compras</span></h1>
    <br>
  </section>
  <br>
  <div class="jumbotron">
    <h1></h1>
    <h5>Esta sessão tem como objetivo gerenciar todos os produtos cadastrados no cardápio da cantina escolar</h5>
  </div>
  </div>
  <hr>

  <a href="ListarLivro" class="btn btn-default">Home</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>SubTotal</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($CartItem as $item) : ?>
        <tr>
          <td><?php echo $item->getProduct()->getId(); ?></td>
          <td><?php echo $item->getProduct()->getName(); ?></td>
          <td>R$ <?php echo number_format($item->getProduct()->getUnitPrice(), 2, ',', '.'); ?></td>
          <td>
            <form action="update_qtd_cart" method="post">
              <input type="hidden" name="id" value="<?php echo $item->getProduct()->getId(); ?>">
              <input type="text" name="quantity" value="<?php echo $item->getQuantity(); ?>" size="2">
              <button type="submit" class="btn btn-primary btn-xs">Alterar</button>
            </form>
          </td>
          <td>R$ <?php echo number_format($item->getTotalPartial(), 2, ',', '.'); ?></td>
          <td>
            <form method="post" action="delete_item_cart">
              <input type="hidden" name="id" value="<?php echo $item->getProduct()->getId(); ?>">
              <input type="submit" class="btn btn-danger btn-sm" value="Excluir">
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4"><b>Total</b></td>
        <td>R$ <?php echo number_format($cart->getTotal(), 2, ',', '.'); ?></td>
      </tr>
    </tfoot>
  </table>

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

  <script type="text/javascript">
    function Mudarestado(el) {
      document.getElementById(el).classList.toggle('mostrar');
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
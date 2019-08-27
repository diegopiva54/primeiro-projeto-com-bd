<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="Stylesheet" href="./css/estilo.css">
  <title>Trabalho Final</title>
</head>

<body>

  <!-- INICIO MENU -->

  <?php
  include './menu.php';
  ?>
  <!-- FIM DO MENU -->


  <!-- INICIO DO CORPO DA PAGINA INICIAL -->
  <div class="container">
    <div class="corpo">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="cadastro.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="editarLivros.php">Alterar</a>
        </li>
      </ul>
    </div>
  </div>

  <?php
  include './footer.html'
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>

<!-- CONEXÃO COM O BANCO PARA FAZER O SELECT-->
<?php
include './conexao.php';
$db = abrir_banco();
$consulta = "Select c.CODIGO, c.TITULO, c.AUTOR, c.EDITORA, c.EDICAO, c.INFORMACAO, c.ANO, c.LINK FROM livros c";
// ARMAZENA INFORMAÇÃO ABRIR BANCO E O SELECT DAS INFORMAÇÕES
$resultado = mysqli_query($db, $consulta);
$aux = mysqli_fetch_assoc($resultado);
?>






<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="Stylesheet" href="./css/estilo.css">
</head>

<body>

    <?php
    include 'menu.php';
    ?>

    <!-- FIM DO MENU -->

    <!-- INICIO DO CORPO DA PAGINA INICIAL -->
    <div class="corpo">
        <div class="container">
            <table class="table cols-12" border="2">

                <?php do { ?>
                <tr>
                    <td>
                        <?php echo $aux['TITULO'] ?><br />Autor: <?php echo $aux['AUTOR'] ?>
                        <br />Edição: <?php echo $aux['EDICAO'] ?><br />Ano: <?php echo date('Y', strtotime($aux['ANO'])) ?>
                        <br />
                    </td>
                    <td>
                        <a href="alterarLivros.php?codigo=<?php echo $aux['CODIGO']; ?>">Editar</a></td>
                    <td>
                        <a href="excLivros.php?codigo=<?php echo $aux['CODIGO']; ?>">Excluir</a>
                    </td>
                    </td>
                </tr>
                <?php } while ($aux = mysqli_fetch_assoc($resultado)); ?>
            </table>
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
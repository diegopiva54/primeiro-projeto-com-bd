<!DOCTYPE html>
<?php
include './conexao.php';
$db = abrir_banco();
$codigo = $_GET['codigo'];
$consulta = "Select c.CODIGO, c.TITULO, c.AUTOR, c.EDITORA, c.EDICAO, c.INFORMACAO, c.ANO, c.LINK FROM livros c where CODIGO = $codigo";
// ARMAZENA INFORMAÇÃO ABRIR BANCO E O SELECT DAS INFORMAÇÕES
$resultado = mysqli_query($db, $consulta);
$aux = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="Stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script type="text/javascript" src="./script.js"></script>
    <title>Contato</title>
</head>

<body>
    <div>
        <?php
        include './menu.php';
        ?>
    </div>
    <div class="container">
        <h2>Editar Contato</h2>
        <form id="formulario" name="formulario" method="POST" action="valForm.php" enctype="multipart/form-data">
            <input type="hidden" name="codigo" value="<?php echo $aux['CODIGO'] ?>"></input>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo" value="<?php echo $aux['TITULO'] ?>" require=""></input>
            <input type="text" name="autor" id="autor" placeholder="Autor" value="<?php echo $aux['AUTOR'] ?>" require=""></input>
            <input type="text" name="editora" id="editora" placeholder="Editora" value="<?php echo $aux['EDITORA'] ?>" require=""></input>
            <input type="text" name="edicao" id="edicao" placeholder="Edição" value="<?php echo $aux['EDICAO'] ?>" require=""></input>
            <input type="date" name="ano" id="ano" placeholder="Ano" value="<?php echo $aux['ANO'] ?>" require=""></input>
            </br>
            <p>Informacao:</p>
            <input type="textarea" id="informacao" name="informacao" value="<?php echo $aux['INFORMACAO'] ?>" require=""></input>
            <input type="file" name="Arquivo" id="Arquivo"><br>
            <input type="submit" name="BTEnvia" id="botao" value="Salvar"></input>
        </form>
    </div>
    <?php
    include './footer.html'
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
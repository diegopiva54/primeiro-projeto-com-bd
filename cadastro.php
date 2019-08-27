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

    <?php
    include './menu.php';
    ?>

    <!-- FIM DO MENU -->

    <!-- INICIO DO CORPO DA PAGINA INICIAL -->
    <div class="container">
        <h2>Cadastro Livro</h2>
        <div class="corpo">
            <div class="container form-group">

                <form id="formulario" class="formulario" name="formulario" method="POST" action="valForm.php" enctype="multipart/form-data">
                    <!-- <form action="uploadPDF.php" method="POST" enctype="multipart/form-data"> -->
                    <input type="hidden" name="codigo" value="-1"></input>
                    <input type="text" class="class_form" name="titulo" id="titulo" placeholder="Titulo" value="" required=""></input>
                    <input type="text" class="class_form" name="autor" id="autor" placeholder="Autor" value="" required=""></input>
                    <input type="text" class="class_form" name="editora" id="editora" placeholder="Editora" value="" required=""></input>
                    <input type="text" class="class_form" name="edicao" id="edicao" placeholder="Edição" value="" required=""></input>
                    <textarea type="textarea" class="txt" name="informacao" id="informacao" maxlength="1024" rows="10" cols="100" placeholder="Digite a inforação do livro" value="" required=""></textarea><br />
                    <label for="" value="Data de Edição: "></label>
                    <input type="file" class="arquivo" name="Arquivo" id="Arquivo">
                    <input type="date" class="class_date" name="ano" id="ano" placeholder="Ano" value="" required=""></input>
                    <input type="submit" class="bt" name="BTEnvia" id="botao" value="Enviar"></input>
                    <input type="reset" class="apag" value="Apagar">
                </form>
                </form>
                <!-- <form action="uploadPDF.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="Arquivo" id="Arquivo"><br>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Apagar">
                 </form> -->
            </div>
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
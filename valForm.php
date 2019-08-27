<?php
require_once './conexao.php';
//usado para verifar se as informações estão em branco.
//require_once tenta verificar até 3 vezes


if (isset($_POST['BTEnvia'])) {
    $codigo = $_POST['codigo'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $edicao = $_POST['edicao'];
    $informacao = $_POST['informacao'];
    $ano = implode("-", array_reverse(explode("/", $_POST['ano'])));
    $nome_temporario = $_FILES["Arquivo"]["tmp_name"];
    $nome_real = $_FILES["Arquivo"]["name"];
    $path = "midias/" . $nome_real;
    
    

    $conexao = abrir_banco();

    // INICIO DO INSERT
    $insert = "INSERT INTO livros (CODIGO,TITULO,AUTOR,EDITORA,EDICAO,INFORMACAO,ANO,LINK) VALUES (null,'$titulo','$autor','$editora','$edicao','$informacao','$ano','$path')";


    //INICIO DO UPDATE 
    $update = "update livros c set c.TITULO ='$titulo', c.AUTOR ='$autor', c.EDITORA ='$editora', c.EDICAO ='$edicao', c.INFORMACAO ='$informacao', c.ANO = '$ano', c.LINK = '$path'  where c.CODIGO = $codigo";


    if (($codigo < 0)) {
        copy($nome_temporario,'midias/'.$nome_real);
        mysqli_query($conexao, $insert) or die('erro ao inserir' . mysqli_errno($conexao));


        print("novo numero gerado para o cadastro efetuado %d.\n"  . mysqli_insert_id($conexao));
        echo "Seu cadastro foi realizado com sucesso!...  Agradecemos a atenção.";
    } else {
        mysqli_query($conexao, $update) or die('erro ao inserir' . mysqli_errno($conexao));
        echo "Seu cadastro foi alterado com sucesso!... Agradecemos a atenção.";
    }
    echo "<a href='painelAdm.php' class='cad'>Painel Administrativo</a>";
} else {
    echo 'Favor preencher o formulario.';
    echo "<a href='index.php'>inicio<\a>";
}

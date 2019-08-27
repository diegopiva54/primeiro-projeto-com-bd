<?php

require_once './conexao.php'; //conexao
$codigo = $_GET['codigo']; //'1'
$db = abrir_banco();//conexao
$deletar = "DELETE FROM livros WHERE CODIGO = $codigo";
if ($codigo > 0){
    mysqli_query($db, $deletar) or die ('Erro ao inserir');
    echo "Deletado com Sucesso <br/>";
    echo "<a href='painelAdm.php'>Voltar</a>";
}
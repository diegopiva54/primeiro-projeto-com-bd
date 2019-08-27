<?php

function abrir_banco(){
    try {
        $conn = new mysqli("localhost", "root", "", "acervo");
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function fechar_banco($conn) {
    try {
        mysqli_close($conn);
    }catch(Exception $e) {
        echo $e->getMessage();
    }
}

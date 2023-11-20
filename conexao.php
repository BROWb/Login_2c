<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "info2";

    $mysqli = new mysqli($host, $usuario, $senha, $banco);

    if ($mysqli->error) {
        die("conexao falhou". $mysqli->error);
    }else{
        echo"amem, deu certo";
    };

?>
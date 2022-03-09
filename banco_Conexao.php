<?php

    $banco = "viajandoo";
    $usuario = "root";
    $senha = "12345";
    $servidor = "localhost";
    
    
    $conn = mysqli_connect($servidor,$usuario,$senha,$banco);
    
    if (!$conn) {
        echo "Não foi possível conectar ao banco MySQL.";
     exit;
    }
    else {
        echo "Parabéns!! A conexão ao banco de dados Viajandoo ocorreu normalmente!.";
        return $conn;
        }    

?> /*Testando conexão de dados*/


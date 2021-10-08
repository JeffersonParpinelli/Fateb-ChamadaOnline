<?php

    //Dados
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'chamada';
    $port = 3306;

    //Conexão
    $connx = mysqli_connect($host, $user, $password, $db_name, $port);

    //Teste conexão
    if($connx){
        echo"Conectou";
    }else{
        echo"ERRO";
    }

?>
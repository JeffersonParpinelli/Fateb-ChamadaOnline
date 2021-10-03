<?php

    //Dados
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'chamada';

    //Conexão
    $connx = mysqli_connect($host, $user, $password, $db_name);
    
    //Teste conexão
    if($connx){
        echo"Conectou";
    }else{
        echo"ERRO";
    }

?>
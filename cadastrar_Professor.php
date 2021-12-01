<?php

error_reporting(0);

//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$situacao = $_POST['situacao'];


//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO professor
VALUES ('$cpf',
        '$nome',
        '$senha',
        '$situacao')";    

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //Faz voltar a página cad_curso.php
        header('location:form_cad_professor.php');

        ?>
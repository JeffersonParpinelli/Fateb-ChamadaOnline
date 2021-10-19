<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
aluno
VALUES ('$codigo',
        '$nome')";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //Faz voltar a página cad_curso.php
        header('location:cad_aluno.php');

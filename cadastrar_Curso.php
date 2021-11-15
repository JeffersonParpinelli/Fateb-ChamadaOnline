<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$situacao = $_POST['situacao'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
curso
VALUES ('$codigo',
        '$descricao',
        '$situacao')";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //Faz voltar a página cad_curso.php
        header('location:form_cad_curso.php');

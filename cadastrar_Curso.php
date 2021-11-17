<?php
//Abre conexao com banco
include 'conexao.php';

$cod_curso = $_POST['codigo'];

$sql = "SELECT * FROM curso WHERE codigo = $cod_curso ";

$result = mysqli_query($connx, $sql);

$dados = mysqli_fetch_assoc($result);

//recebimento dos dados das váriaveis
$cod_curso = $_POST['codigo'];
$descricao = $_POST['descricao'];
$situacao = $_POST['situacao'];

$recebendo_cadastros = "INSERT INTO 
curso
VALUES ('$cod_curso',
        '$descricao',
        '$situacao')";
        
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros


        //Faz voltar a página cad_curso.php
        header('location:form_cad_curso.php');

<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nome = $_POST['nome'];
$titulacao = $_POST['titulacao'];
$senha = $_POST['senha'];
$situacao = $_POST['situacao'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
professor
VALUES ('$cpf',
        '$rg',
        '$nome',
        '$titulacao',
        '$senha',
        '$situacao',
        '$cep',
        '$endereco',
        '$numero',
        '$bairro',
        '$pais',
        '$estado',
        '$cidade',
        '$telefone',
        '$email' )";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //Faz voltar a página cad_curso.php
        header('location:cad_professor.html');
?>
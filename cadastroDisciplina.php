<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
//$ o que esta em Cifrão$ é o nome que esta no banco, entre '' é o name do input
$codigo = $_POST['codDisc'];
$descricao = $_POST['descDisc'];
$cargaHoraria = $_POST['cargaHorariaDisc'];
$qtdeAulasSemanais = $_POST['qtdeAulasSemanaDisc'];
$situacao = $_POST['situacaoDisc'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
disciplina
VALUES ('$codigo',
        '$descricao',
        '$cargaHoraria',
        '$qtdeAulasSemanais',
        '$situacao')";

echo"CODIGO: $codigo 
DESCRICAO: $descricao ADICIONADA";
        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //Faz voltar a página cad_curso.php
        //header('location:cad_disciplina.html');
<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
//$ o que esta em Cifrão$ é o nome que esta no banco, entre '' é o name do input
$codigo = $_POST['codigo'];
$codCalendario = $_POST['codCalendario'];
// $data = $_POST['data'];
// $data =   date_format($dataEvento,'Y-m-d');
$data = date('Y-m-d H:i:s');
$tipo = $_POST['tipo'];
$descMotivo = $_POST['descMotivo'];
$qtdeAulas = $_POST['qtdeAulas'];
$turma = $_POST['turma'];
$codDisc = $_POST['codDisc'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
evento
VALUES ('$codigo',
        '$data',
        '$tipo',
        '$descMotivo',
        '$qtdeAulas',
        '$codCalendario',
        '$turma',
        '$codDisc')";

//query_cadastros = recebe como parametros
//conexao do banco e dados do cadastros
$query_cadastros = mysqli_query($connx, $recebendo_cadastros) or die(mysqli_error($connx));;;

if ($query_cadastros == true) {
        echo "Cadastro Efetuado com sucesso!!!";
} else {
        echo "Erro ao cadastrar";
}

//Faz voltar a página cad_curso.php
// header('location:form_cad_calendario.php');
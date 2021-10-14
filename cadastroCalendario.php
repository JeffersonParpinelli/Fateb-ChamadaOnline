<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
//$ o que esta em Cifrão$ é o nome que esta no banco, entre '' é o name do input
$codigo = $_POST['codCalendario'];
$semestreAno = $_POST['semestreAnoCalendario'];

$data = $_POST['dataEvento'];
$tipo = $_POST['tipoEvento'];
$descMotivo = $_POST['descMotivoEvento'];
$qtdeAulas = $_POST['qtdeAulasEvento'];
$codCalendario = $_POST['codCalendario'];
$codTurma = $_POST['codTurmaEvento'];
$codDisc = $_POST['codDiscEvento'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
calendario
VALUES ('$codigo',
        '$semestreAno')";

$recebendo_cadastroEvento = "INSERT INTO 
evento
VALUES ('',
        '$data',
        '$tipo',
        '$descMotivo',
        '$qtdeAulas',
        '$codCalendario',
        '$codTurma',
        '$codDisc')";        

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros, $recebendo_cadastroEvento);

        //Faz voltar a página cad_curso.php
        header('location:cad_calendario.html');
?>
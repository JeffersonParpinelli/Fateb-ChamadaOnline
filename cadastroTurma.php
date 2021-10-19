<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis '' é como esta no banco entre aspas
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$etapa = $_POST['etapa'];
$semestreAno = $_POST['semestreAno'];
$situacao = $_POST['situacao'];
$curso = $_POST['codCurso'];
$calendario = $_POST['codCalendario'];$


//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
curso
VALUES ('$codigo',
        '$descricao',
        '$etapa',
        '$semestreAno',
        '$situacao',
        '$curso',
        '$calendario)";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //Faz voltar a página cad_curso.php
        header('location:cad_turma.php');

<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$situacao = $_POST['situacao'];
$cargaHoraria = $_POST['cargaHoraria'];
$qtdeAulasSemana = $_POST['qtdeAulasSemanais'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastroCurso = "INSERT INTO 
curso
VALUES ('$codigo',
        '$descricao',
        '$situacao')";

$recebendo_cadastroDisciplina = "INSERT INTO 
disciplina
VALUES ('$codigo',
        '$descricao',
        '$cargaHoraria',
        '$qtdeAulasSemana',
        '$situacao')";    

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastroCurso);
        $query_cadastros = mysqli_query($connx, $recebendo_cadastroDisciplina);

        //Faz voltar a página cad_curso.php
        header('location:index.html');

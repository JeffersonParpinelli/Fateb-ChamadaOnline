<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
//$ o que esta em Cifrão$ é o nome que esta no banco, entre '' é o name do input
$codCurso = $_POST['curso'];
$codDisciplina = $_POST['codigo'];
$etapa = '1';

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
cursodisc
VALUES ('$codCurso',
        '$codDisciplina',
        '$etapa')";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros) or mysqli_error($connx, $recebendo_cadastros);;;;

        //Faz voltar a página cad_curso.php
        //header('location:form_cad_disciplina.php');
?>
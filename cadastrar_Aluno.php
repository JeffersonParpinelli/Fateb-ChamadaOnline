<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
$ra = $_POST['ra'];
$nome = $_POST['nome'];
$semestreAno = $_POST['semestreAno'];
$situacao = $_POST['situacao'];
$curso = $_POST['curso'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO aluno (ra,nome,semestreAnoIngresso,situacao,codCurso)
VALUES ('$ra',
        '$nome',
        '$semestreAno',
        '$situacao',
        '$curso')";    

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //Faz voltar a página cad_curso.php
        header('location:form_cad_aluno.php');

        ?>
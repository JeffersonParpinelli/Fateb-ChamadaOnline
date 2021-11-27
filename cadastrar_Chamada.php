<?php

error_reporting(0);

//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
//$ o que esta em Cifrão$ é a variavel que ira receber os dados do input, entre '' é o name do input onde estao os dados

$dataAula = $_POST['data'];
$conteudo = $_POST['conteudo'];
$codTurma = $_POST['turma'];
$codDisc = $_POST['disciplina'];


// foreach (($_POST["presenca"]) as $value)
// {
//         $ra = $value;}

$recebendo_cadastros = "INSERT INTO 
chamada
VALUES (0,
        '$dataAula',
        '$conteudo',
        '$codTurma',
        '$codDisc')";

//query_cadastros = recebe como parametros
//conexao do banco e dados do cadastros
$query_cadastros = mysqli_query($connx, $recebendo_cadastros) or die(mysqli_error($connx));;;

$id_chamada = $connx->insert_id;


$result = array();
foreach ($_POST["presenca"] as $element) {
        $result[$element]["ra"] = ($element);
        $result[$element]["qtd"] += 1;
}
foreach (array_values($result) as $chamadaaluno) {

        $chamada = (array_values($chamadaaluno));

        $ra =  $chamada[0];
        $presencas = $chamada[1];


        $recebendo_cadastros = "INSERT INTO 
        presenca
        VALUES ('$id_chamada',
                '$ra',
                '$presencas')";

        $query_cadastros = mysqli_query($connx, $recebendo_cadastros) or die(mysqli_error($connx));;;
}

/*if($query_cadastros == true){
                echo "Cadastro Efetuado com sucesso!!!";
        }else{
                echo "Erro ao cadastrar";
        }
        */
//Faz voltar a página cad_curso.php
header('location:form_cad_chamada.php');

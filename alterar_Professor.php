<?php

//Abre conexao com banco
include 'conexao.php';

$cpf_professor = $_POST["cpf"];
$nome_professor = $_POST["nome"];
$senha_professor = $_POST["senha"];
$sit_professor = $_POST["situacao"];

$sql = "UPDATE professor SET nome = '$nome_professor', senha = '$senha_professor', situacao = '$sit_professor' WHERE cpf = '$cpf_professor' ";

$result = mysqli_query($connx, $sql) or die(mysqli_error($connx));;;


// if ($result == true) {
//     echo "Alterado com sucesso";
// } else {
//     echo "Erro ao Alterar";
// }


//Faz voltar a página cad_curso.php
header('location:form_cad_professor.php');


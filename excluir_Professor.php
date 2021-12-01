<?php

//Abre conexao com banco
include 'conexao.php';

$cpf_professor = $_GET["id"];

$sql = "DELETE FROM professor WHERE cpf = '$cpf_professor'";

$result = mysqli_query($connx, $sql) or die(mysqli_error($connx));;;

// if ($result == true) {
//     echo "Excluído com sucesso";
// } else {
//     echo "Erro ao Excluir";
// }

//Faz voltar a página cad_curso.php
header('location:form_cad_professor.php');

<?php

//Abre conexao com banco
include 'conexao.php';

$id_aluno = $_POST["codigo"];
$nome_aluno = $_POST["nome"];

$sql = "UPDATE aluno SET nome = '$nome_aluno' WHERE codigo = $id_aluno";

$result = mysqli_query($connx, $sql);

// if ($result == true) {
//     echo "Alterado com sucesso";
// } else {
//     echo "Erro ao Alterar";
// }

//Faz voltar a página cad_aluno.php
header('location:cad_aluno.php');


<?php

//Abre conexao com banco
include 'conexao.php';

$id_curso = $_POST["codigo"];
$nome_curso = $_POST["descricao"];
$sit_curso = $_POST["situacao"];

$sql = "UPDATE curso SET descricao = '$nome_curso', situacao = '$sit_curso' WHERE codigo = $id_curso";

$result = mysqli_query($connx, $sql);

// if ($result == true) {
//     echo "Alterado com sucesso";
// } else {
//     echo "Erro ao Alterar";
// }

//Faz voltar a página cad_curso.php
header('location:cad_curso.php');


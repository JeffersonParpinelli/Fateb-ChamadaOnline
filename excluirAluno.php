<?php

//Abre conexao com banco
include 'conexao.php';

$id_aluno = $_GET["id"];

$sql = "DELETE FROM aluno WHERE codigo = $id_aluno";

$result = mysqli_query($connx, $sql);

// if ($result == true) {
//     echo "Excluído com sucesso";
// } else {
//     echo "Erro ao Excluir";
// }

//Faz voltar a página cad_aluno.php
header('location:cad_aluno.php');

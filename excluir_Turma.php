<?php

//Abre conexao com banco
include 'conexao.php';

$codigo = $_GET["id"];

$sql = "DELETE FROM turma WHERE codigoTurma = $codigo";

$result = mysqli_query($connx, $sql);

// if ($result == true) {
//     echo "Excluído com sucesso";
// } else {
//     echo "Erro ao Excluir";
// }

//Faz voltar a página cad_aluno.php
header('location:form_cad_turma.php');

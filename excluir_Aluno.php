<?php

//Abre conexao com banco
include 'conexao.php';

$ra = $_GET["id"];

$sql = "DELETE FROM aluno WHERE ra = $ra";

$result = mysqli_query($connx, $sql);

// if ($result == true) {
//     echo "Excluído com sucesso";
// } else {
//     echo "Erro ao Excluir";
// }

//Faz voltar a página cad_aluno.php
header('location:form_cad_aluno.php');

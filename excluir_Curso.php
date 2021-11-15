<?php

//Abre conexao com banco
include 'conexao.php';

$id_curso = $_GET["id"];

$sql = "DELETE FROM curso WHERE codigo = $id_curso";

$result = mysqli_query($connx, $sql);

// if ($result == true) {
//     echo "Excluído com sucesso";
// } else {
//     echo "Erro ao Excluir";
// }

//Faz voltar a página cad_curso.php
header('location:form_cad_curso.php');

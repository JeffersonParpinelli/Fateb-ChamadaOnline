<?php

//Abre conexao com banco
include 'conexao.php';

$id_disciplina = $_GET["id"];

$sql = "DELETE FROM disciplina WHERE codigo = $id_disciplina";

$result = mysqli_query($connx, $sql);

if ($result == true) {
echo "Excluído com sucesso";
} else {
    echo "Erro ao Excluir";
}

//Faz voltar a página cad_curso.php
header('location:form_cad_disciplina.php');
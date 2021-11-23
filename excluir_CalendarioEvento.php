<?php

//Abre conexao com banco
include 'conexao.php';

$id_calendarioEvento = $_GET["id"];

$sql = "DELETE FROM evento WHERE codigo = $id_calendarioEvento";

$result = mysqli_query($connx, $sql);

// if ($result == true) {
//     echo "Excluído com sucesso";
// } else {
//     echo "Erro ao Excluir";
// }

//Faz voltar a página cad_calendario.php
header('location:form_cad_calendario.php');

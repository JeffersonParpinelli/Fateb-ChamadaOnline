<?php

//Abre conexao com banco
include 'conexao.php';

$id_calendario = $_GET["id"];

$sql = "DELETE FROM calendario WHERE codigo = $id_calendario";

$result = mysqli_query($connx, $sql);

// if ($result == true) {
//     echo "Excluído com sucesso";
// } else {
//     echo "Erro ao Excluir";
// }

//Faz voltar a página cad_calendario.php
header('location:form_cad_calendario.php');

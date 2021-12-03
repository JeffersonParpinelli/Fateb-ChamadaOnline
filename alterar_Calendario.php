<?php

//Abre conexao com banco
include 'conexao.php';

$id_calendario = $_POST['codCalendario'];
$semestreAno_calendario = $_POST['semestreAno'];

$sql = "UPDATE calendario SET semestreAno = '$semestreAno_calendario' WHERE codigo = $id_calendario";

$result = mysqli_query($connx, $sql);

// if ($result == true) {
//     echo "Alterado com sucesso";
// } else {
//     echo "Erro ao Alterar";
// }

//Faz voltar a página form_cad_calendario.php
header('location:form_cad_calendario.php');




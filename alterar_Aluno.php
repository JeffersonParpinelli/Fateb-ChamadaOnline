<?php

include 'conexao.php';

$ra = $_POST["ra"];
$nome_aluno = $_POST["nome"];
$semestreAno_aluno = $_POST["semestreAno"];
$situacao_aluno = $_POST["situacao"];
$curso_aluno = $_POST["curso"];

$sql = "UPDATE aluno SET nome = '$nome_aluno', 
semestreAnoIngresso = '$semestreAno_aluno',
situacao = '$situacao_aluno',
codCurso = '$curso_aluno'
WHERE ra = $ra";

$result = mysqli_query($connx,$sql);

if ($result == true) {
echo "Alterado com sucesso";
} else {
echo "Erro ao Alterar";
}

//Faz voltar a página cad_aluno.php
header('location:form_cad_aluno.php');

?>


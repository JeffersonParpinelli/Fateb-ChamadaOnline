<?php

include 'conexao.php';

$codigo_disciplina = $_POST["codigo"];
$descricao_disciplina = $_POST["descricao"];
$cargaHoraria_disciplina = $_POST["cargaHoraria"];
$qtdeAulasSemanais_disciplina = $_POST["qtdeAulasSemanais"];
$situacao_disciplina = $_POST["situacao"];

$sql = "UPDATE disciplina SET descricao = '$descricao_disciplina',
cargaHoraria = '$cargaHoraria_disciplina',
qtdeAulasSemanais = '$qtdeAulasSemanais_disciplina',
situacao = '$situacao_disciplina'
WHERE codigo = '$codigo_disciplina'";

$result = mysqli_query($connx, $sql);

if($result == true){
    echo"Alterado com sucesso";
}else{
    echo "Erro ao alterar";
}


//Direciona para pagina inicial do cadastro
//header("form_cad_disciplina.php"); 

?>
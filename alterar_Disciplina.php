<?php

include 'conexao.php';

$codigo_disciplina = $_POST["codigo"];
$descricao_disciplina = $_POST["descricao"];
$cargaHoraria_disciplina = $_POST['cargaHoraria'];
$qtdeAulasSemanais = $_POST['qtdeAulasSemanais'];
$situacao = $_POST['situacao'];


$sql = "UPDATE disciplina SET descricao = '$descricao_disciplina',
cargaHoraria = '$cargaHoraria_disciplina',
situacao = '$situacao',
qtdeAulasSemanais = '$qtdeAulasSemanais',
situacao = '$situacao'

WHERE codigo = '$codigo_disciplina'";

$result = mysqli_query($connx, $sql);

/*if($result == true){
    echo"Alterado com sucesso";

}else{
    echo "Erro ao alterar";
}
*/
//Direciona para pagina inicial do cadastro
header('location:form_cad_disciplina.php'); 

?>
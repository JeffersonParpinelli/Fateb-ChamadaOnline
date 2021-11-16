<?php

include 'conexao.php';

echo "<br>" . $id_turma = $_POST['codigo'];
echo "<br>" . $descricao_turma = $_POST['descricao'];
echo "<br>" . $etapa_turma = $_POST['etapa'];
echo "<br>" . $semestreAno_turma = $_POST['semestreAno'];
echo "<br>" . $situacao_turma = $_POST['situacao'];
echo "<br>" . $codCurso_turma = $_POST['curso'];
echo "<br>" . $codCalendario_turma = $_POST['calendario'];

$sql = "UPDATE turma SET descricaoTurma = '$descricao_turma',
etapa = '$etapa_turma',
semestreAno = '$semestreAno_turma',
situacaoTurma = '$situacao_turma',
codCurso = '$codCurso_turma',
codCalendario = '$codCalendario_turma'

WHERE codigoTurma = '$id_turma'";

$result = mysqli_query($connx, $sql);

/*if($result == true){
    echo"Alterado com sucesso";

}else{
    echo "Erro ao alterar";
}
*/

//Direciona para pagina inicial do cadastro
header('location:form_cad_turma.php'); 

?>
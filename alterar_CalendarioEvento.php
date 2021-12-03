<?php

include 'conexao.php';

$codigoEvento = $_POST['codigo'];
$codCalendario_evento = $_POST['calendario'];
$dataEvento = $_POST['data'];
$tipo = $_POST['tipo'];
$descMotivo = $_POST['descMotivo'];
$qtdeAulas = $_POST['qtdeAulas'];
$turma = $_POST['turma'];
$codDisc = $_POST['codDisc'];

$sql = "UPDATE evento SET data = '$dataEvento',
tipo = '$tipo',
descMotivo = '$descMotivo',
qtdeAulas = '$qtdeAulas',
codCalendario = '$codCalendario_evento',
codTurma = '$turma',
codDisc = '$codDisc'


WHERE codigo = '$codigoEvento'";

$result = mysqli_query($connx, $sql);

// if($result == true){
//     echo"Alterado com sucesso";

// }else{
//     echo "Erro ao alterar";
// }

//Direciona para pagina inicial do cadastro
if ($tipo == "FERIADO") {
    header('location:form_cad_calendario.php');
} else if ($tipo == "RECESSO") {
    header('location:form_cad_calendario.php');
} else {
    header('location:form_cad_calendarioo.php');
}

?>
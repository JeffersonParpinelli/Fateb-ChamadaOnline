<?php
include_once("conexao.php");

function retorna($codigo, $connx){
	$result_disciplina = "SELECT * FROM disciplina WHERE codigo = '$codigo' LIMIT 1";
	$resultado_disciplina = mysqli_query($connx, $result_disciplina);
	if($resultado_disciplina->num_rows){
		$row_disciplina = mysqli_fetch_assoc($resultado_disciplina);
		$valores['descricao'] = $row_disciplina['descricao'];
		$valores['cargaHoraria'] = $row_disciplina['cargaHoraria'];
		$valores['qtdeAulasSemanais'] = $row_disciplina['qtdeAulasSemanais'];
		$valores['situacao'] = $row_disciplina['situacao'];
	}else{
		$valores['descricao'] = 'CURSO NÃO ENCONTRADO';
	}
	return json_encode($valores);
}

if(isset($_GET['codigo'])){
	echo retorna($_GET['codigo'], $connx);
}
?>
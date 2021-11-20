<?php
include_once("conexao.php");

function retorna($cpf, $connx){
	$result_professor = "SELECT * FROM professor WHERE cpf = '$cpf' LIMIT 1";
	$resultado_professor = mysqli_query($connx, $result_professor);
	if($resultado_professor->num_rows){
		$row_professor = mysqli_fetch_assoc($resultado_professor);
		$valores['nome'] = $row_professor['nome'];
		$valores['senha'] = $row_professor['senha'];
		$valores['situacao'] = $row_professor['situacao'];
	}else{
		$valores['nome'] = 'NÃO EXISTE - CADASTRE AQUI';
	}
	return json_encode($valores);
}

if(isset($_GET['cpf'])){
	echo retorna($_GET['cpf'], $connx);
}
?>
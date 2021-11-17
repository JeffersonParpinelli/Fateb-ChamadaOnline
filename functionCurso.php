<?php
include_once("conexao.php");

function retorna($codigo, $connx){
	$result_curso = "SELECT * FROM curso WHERE codigo = '$codigo' LIMIT 1";
	$resultado_curso = mysqli_query($connx, $result_curso);
	if($resultado_curso->num_rows){
		$row_curso = mysqli_fetch_assoc($resultado_curso);
		$valores['descricao'] = $row_curso['descricao'];
		$valores['situacao'] = $row_curso['situacao'];
	}else{
		$valores['descricao'] = 'CURSO NÃO ENCONTRADO';
	}
	return json_encode($valores);
}

if(isset($_GET['codigo'])){
	echo retorna($_GET['codigo'], $connx);
}
?>
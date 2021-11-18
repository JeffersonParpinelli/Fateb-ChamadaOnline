<?php
include_once("conexao.php");

function retorna($codigo, $connx){
	$result_calendario = "SELECT * FROM calendario WHERE codigo = '$codigo' LIMIT 1";
	$resultado_calendario = mysqli_query($connx, $result_calendario);
	if($resultado_calendario->num_rows){
		$row_calendario = mysqli_fetch_assoc($resultado_calendario);
		$valores['semestreAno'] = $row_calendario['semestreAno'];
	}else{
		$valores['semestreAno'] = 'CALENDÁRIO NÃO ENCONTRADO';
	}
	return json_encode($valores);
}

if(isset($_GET['codCalendario'])){
	echo retorna($_GET['codCalendario'], $connx);
}
?>
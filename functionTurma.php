<?php
include_once("conexao.php");

function retorna($codigo, $connx){
	$result_turma = "SELECT * FROM turma WHERE codigoTurma = '$codigo' LIMIT 1";
	$resultado_turma = mysqli_query($connx, $result_turma);
	if($resultado_turma->num_rows){
		$row_turma = mysqli_fetch_assoc($resultado_turma);
		$valores['descricao'] = $row_turma['descricaoTurma'];
		$valores['etapa'] = $row_turma['etapa'];
        $valores['semestreAno'] = $row_turma['semestreAno'];
		$valores['calendario'] = $row_turma['codCalendario'];
		$valores['curso'] = $row_turma['codCurso'];
		$valores['situacao'] = $row_turma['situacaoTurma'];
	}else{
		$valores['descricao'] = 'NÃO EXISTE - CADASTRE AQUI';
		$valores['situacao'] = 'ativo';
	}
	return json_encode($valores);
}

if(isset($_GET['codigo'])){
	echo retorna($_GET['codigo'], $connx);
}
?>
<?php
include_once("conexao.php");

function retorna($ra, $connx){
	$result_aluno = "SELECT * FROM aluno WHERE ra = '$ra' LIMIT 1";
	$resultado_aluno = mysqli_query($connx, $result_aluno);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
		$valores['nome'] = $row_aluno['nome'];
        $valores['semestreAno'] = $row_aluno['semestreAnoIngresso'];
		$valores['curso'] = $row_aluno['codCurso'];
		$valores['situacao'] = $row_aluno['situacao'];
	}else{
		$valores['nome'] = 'NÃO EXISTE - CADASTRE AQUI';
	}
	return json_encode($valores);
}

if(isset($_GET['ra'])){
	echo retorna($_GET['ra'], $connx);
}
?>
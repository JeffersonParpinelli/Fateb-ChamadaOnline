
 <?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Relatório</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'relatório_chamada.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5"><b>RELATÓRIO DA CHAMADA ONLINE</b></tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>CURSO</b></td>';
		$html .= '<td><b>DISCIPLINA</b></td>';
		$html .= '<td><b>PROFESSOR</b></td>';
		$html .= '<td><b>ALUNO</b></td>';
		$html .= '<td><b>PRESENÇAS</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_chamada = "SELECT c.descricao as Curso, d.descricao as Disciplina, pro.nome as Professor, a.nome,
		(select coalesce(sum(p.presencas),0) FROM presenca p
		JOIN aluno al on al.ra = p.ra
		JOIN turmadiscaluno ta on ta.ra = al.ra
		JOIN chamada cha on cha.codChamada = p.codChamada
		WHERE al.ra = a.ra AND ta.codDisc = td.codDisc AND cha.codDisc = d.codigo) as 'Presenças' FROM turma as t 
		JOIN curso c on c.codigo = t.codCurso
		JOIN turmadisc td on td.codTurma = t.codigoTurma
		JOIN disciplina d on d.codigo = td.codDisc
		JOIN turmadiscaluno ta on ta.codDisc = d.codigo
		JOIN professor pro on pro.cpf = td.cpfProfessor
		JOIN aluno a on a.ra = ta.ra;";
		$resultado_chamada = mysqli_query($connx , $result_chamada);
		
		while($row_chamada = mysqli_fetch_assoc($resultado_chamada)){
			$html .= '<tr>';
			$html .= '<td>'.$row_chamada["Curso"].'</td>';
			$html .= '<td>'.$row_chamada["Disciplina"].'</td>';
			$html .= '<td>'.$row_chamada["Professor"].'</td>';
			$html .= '<td>'.$row_chamada["nome"].'</td>';
			$html .= '<td>'.$row_chamada["Presenças"].'</td>';
			$html .= '</tr>';			
			;
		}
		$html .= '</table>';
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>
<?php

error_reporting(0);

include 'conexao.php';

/**TABELA TURMADISC UPDATE**/ 
echo $codTurma = $_POST['turma'];
echo $codDisc = $_POST['disciplina'];
echo $dataInicio = $_POST['dataInicio'];
echo $dataFim = $_POST['dataFim'];
echo $professor = $_POST['professor'];

$recebendo_cadastros = "UPDATE 
turmadisc SET dataInicio = '$dataInicio', dataFim = '$dataFim', cpfProfessor = '$professor'
WHERE codTurma = $codTurma AND codDisc = $codDisc";


// // //query_cadastros = recebe como parametros
// // //conexao do banco e dados do cadastros
$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

// if($query_cadastros == true){
//                 echo "Cadastro Efetuado com sucesso!!!";
//         }else{
//                 echo "Erro ao cadastrar";
//         }

        //Faz voltar a página cad_curso.php
header('location:form_cad_detalhes_disciplina.php');


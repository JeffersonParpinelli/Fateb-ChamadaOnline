<?php

error_reporting(3);

include 'conexao.php';

// $id_turma = $_POST['turma'];
// $id_disc = $_POST['disciplina'];

// $sql = "SELECT * FROM turmadisc WHERE codTurma = $id_turma AND codDisc = $id_disc";

// $result = mysqli_query($connx, $sql);

// $dados = mysqli_fetch_assoc($result);

//Abre conexao com banco

//recebimento dos dados das váriaveis
//$ o que esta em Cifrão$ é a variavel que ira receber os dados do input, entre '' é o name do input onde estao os dados

/**TABELA TURMADISC UPDATE**/ 
echo $codTurma = $_POST['turma'];
echo $codDisc = $_POST['disciplina'];
echo $dataInicio = $_POST['dataInicio'];
echo $dataFim = $_POST['dataFim'];
echo $professor = $_POST['professor'];

/**TABELA HORÁRIO INSERT**/ 
// /**código horário**/
// echo $codTurma = $_POST['turma'];
// echo $codDisc = $_POST['disciplina'];
// echo $diaSemana = $_POST['diaSemana'];
// echo $aula1 = $_POST['aula1'];
// echo $aula2 = $_POST['aula2'];
// echo $aula3 = $_POST['aula3'];
// echo $aula4 = $_POST['aula4'];
// echo $aula5 = $_POST['aula5'];
// echo $aula6 = $_POST['aula6'];

$recebendo_cadastros = "UPDATE 
turmadisc SET dataInicio = '$dataInicio', dataFim = '$dataFim', cpfProfessor = '$professor'
WHERE codTurma = $codTurma";

// // $recebendo_cadastros = "INSERT INTO 
// // horario
// // VALUES (,
// //         '$diaSemana',
// //         '$aula1',
// //         '$aula2',
// //         '$aula3',
// //         '$aula4',
// //         '$aula5',
// //         '$aula6',)";

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

/*********************************************************************************************************************************/
// foreach (($_POST["presenca"]) as $value)
// {
//         $ra = $value;}

// $recebendo_cadastros = "INSERT INTO 
// chamada
// VALUES (0,
//         '$dataAula',
//         '$conteudo',
//         '$codTurma',
//         '$codDisc')";

// //query_cadastros = recebe como parametros
// //conexao do banco e dados do cadastros
// $query_cadastros = mysqli_query($connx, $recebendo_cadastros) or die(mysqli_error($connx));;;

// $id_chamada = $connx->insert_id;


// $result = array();
// foreach ($_POST["presenca"] as $element) {
//         $result[$element]["ra"] = ($element);
//         $result[$element]["qtd"] += 1;
// }
// foreach (array_values($result) as $chamadaaluno) {

//         $chamada = (array_values($chamadaaluno));

//         $ra =  $chamada[0];
//         $presencas = $chamada[1];

//         $recebendo_cadastros = "INSERT INTO 
//         presenca
//         VALUES ('$id_chamada',
//                 '$ra',
//                 '$presencas')";

//         $query_cadastros = mysqli_query($connx, $recebendo_cadastros) or die(mysqli_error($connx));;;
// }

/*if($query_cadastros == true){
                echo "Cadastro Efetuado com sucesso!!!";
        }else{
                echo "Erro ao cadastrar";
        }
        */
//Faz voltar a página cad_curso.php
// header('location:form_cad_chamada.php');

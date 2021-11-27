<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
//$ o que esta em Cifrão$ é a variavel que ira receber os dados do input, entre '' é o name do input onde estao os dados
echo $cod_turma = $_POST['codigoTurma'];
echo $cod_disciplina = $_POST['codDisciplina'];

//pegar dados da tabela
$sql = "SELECT * FROM turma WHERE codigoTurma = $cod_turma ";
$sql2 = "SELECT * FROM disciplina WHERE codigo = $cod_disciplina ";

$result = mysqli_query($connx, $sql);
$result2 = mysqli_query($connx, $sql2);

$dados = mysqli_fetch_assoc($result);
$dados2 = mysqli_fetch_assoc($result2);

$codigo_turma = $dados['codigoTurma'];
$codigo_disciplina = $dados2['codigo'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
turmadisc
VALUES ('$codigo_turma',
        '$codigo_disciplina',
        null,
        null,
        null)";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros) or die(mysqli_error($connx));;;

        if($query_cadastros == true){
                echo "Cadastro Efetuado com sucesso!!!";
        }else{
                echo "Erro ao cadastrar";
        }
        
        //Faz voltar a página cad_curso.php
        //header('location:form_cad_disciplina_turma.php');
?>
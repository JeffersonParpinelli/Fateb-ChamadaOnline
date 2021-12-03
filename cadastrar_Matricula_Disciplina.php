<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
//$ o que esta em Cifrão$ é a variavel que ira receber os dados do input, entre '' é o name do input onde estao os dados

$codDisciplina = $_POST['disciplina'];
$codTurma = $_POST['turma'];

foreach (($_POST["selecionado"]) as $value)
{
        $ra = $value;

        $recebendo_cadastros = "INSERT INTO 
turmadiscaluno
VALUES ('$ra',
        '$codDisciplina',
        '$codTurma',
        null)";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros) or die(mysqli_error($connx));;;
}

        /*if($query_cadastros == true){
                echo "Cadastro Efetuado com sucesso!!!";
        }else{
                echo "Erro ao cadastrar";
        }
        */
        //Faz voltar a página cad_curso.php
        header('location:form_cad_matricula_disciplina.php');

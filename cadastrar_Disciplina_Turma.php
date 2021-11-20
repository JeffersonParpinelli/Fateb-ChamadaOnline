<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
//$ o que esta em Cifrão$ é a variavel que ira receber os dados do input, entre '' é o name do input onde estao os dados
echo $codigo = $_POST['codigo'];
echo "<br>" . $descricao = $_POST['descricao'];
echo "<br>" . $etapa = $_POST['etapa'];
echo "<br>" . $semestreAno = $_POST['semestreAno'];
echo "<br>" . $calendario = $_POST['calendario'];
echo "<br>" . $curso = $_POST['curso'];
echo "<br>" . $situacao = $_POST['situacao'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
turma
VALUES ('$codigo',
        '$descricao',
        '$etapa',
        '$semestreAno',
        '$situacao',
        '$curso',
        '$calendario')";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros) or die(mysqli_error($connx));;;

        /*if($query_cadastros == true){
                echo "Cadastro Efetuado com sucesso!!!";
        }else{
                echo "Erro ao cadastrar";
        }
        */
        //Faz voltar a página cad_curso.php
        header('location:form_cad_disciplina_turma.php');
?>
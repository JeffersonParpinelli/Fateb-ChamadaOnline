<?php

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM aluno";

$result = mysqli_query($connx, $sql);

while ($dados = mysqli_fetch_assoc($result)) {
    $id_aluno = $dados['codigo'];
    $nome_aluno = $dados['nome'];

    echo "Cod: " . $id_aluno . "<Br>" .
        "Nome: " . $nome_aluno . "<Br>" ;

?>
    <a href="excluirAluno.php?id=<?php echo $id_aluno ?>" type="button" class="btn btn-primary pull-right">Excluir</a>
    <a href="form_alterarAluno.php?id=<?php echo $id_aluno ?>" type="button" class="btn btn-primary pull-right">Alterar</a><br><br>
<?php
}
?>


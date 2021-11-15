<?php

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM aluno AS A JOIN curso AS C ON C.codigo = A.codCurso"; 

$result = mysqli_query($connx, $sql);

while ($dados = mysqli_fetch_assoc($result)) {
    $id_aluno = $dados['ra'];
    $nome_aluno = $dados['nome'];
    $codCurso = $dados['descricao'];

    echo "Cod: " . $id_aluno . "<Br>" .
        "Nome: " . $nome_aluno . "<Br>" .
        "Curso: " . $codCurso . "<Br>" ;

?>
    <a href="excluir_Aluno.php?id=<?php echo $id_aluno ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
    <a href="form_alterar_Aluno.php?id=<?php echo $id_aluno ?>" type="button" class="btn btn-primary pull-right">Alterar</a><br><br>
<?php
}
?>


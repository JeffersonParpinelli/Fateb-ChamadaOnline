<?php

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM curso";

$result = mysqli_query($connx, $sql);

while ($dados = mysqli_fetch_assoc($result)) {
    $id_curso = $dados['codigo'];
    $nome_curso = $dados['descricao'];
    $sit_curso = $dados['situacao'];

    echo "Cod: " . $id_curso . "<Br>" .
        "Nome: " . $nome_curso . "<Br>" .
        "Situação: " . $sit_curso . "<Br>";

?>
    <a href="excluirCurso.php?id=<?php echo $id_curso ?>" type="button" class="btn btn-primary pull-right">Excluir</a><br><br>
<?php
}
?>
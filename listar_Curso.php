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
    <a href="excluir_Curso.php?id=<?php echo $id_curso ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
    <a href="form_alterar_Curso.php?id=<?php echo $id_curso ?>" type="button" class="btn btn-primary pull-right">Alterar</a><br><br>
<?php
}
?>


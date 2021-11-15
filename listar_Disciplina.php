<?php

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM disciplina";

$result = mysqli_query($connx, $sql);

while ($dados = mysqli_fetch_assoc($result)) {
    $id_disciplina = $dados['codigo'];
    $nome_disciplina = $dados['descricao'];

    echo "Código: " . $id_disciplina . "<Br>" .
        "Disciplina: " . $nome_disciplina . "<Br>";

?>
    <a href="excluir_Disciplina.php?id=<?php echo $id_disciplina ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
    <a href="form_alterar_Disciplina.php?id=<?php echo $id_disciplina ?>" type="button" class="btn btn-primary pull-right">Alterar</a><br><br>
<?php
}
?>


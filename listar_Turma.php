<?php

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM turma";

$result = mysqli_query($connx, $sql);

while ($dados = mysqli_fetch_assoc($result)) {
    $codigo_turma = $dados['codigoTurma'];
    $descricao_turma = $dados['descricaoTurma'];
    $semestreAno_turma = $dados['semestreAno'];

    echo    "Código: " . $codigo_turma . "<Br>" .
            "Disciplina: " . $descricao_turma . "<Br>" .
            "Semestre/Ano: " . $semestreAno_turma . "<Br>";

?>
    <a href="excluir_Turma.php?id=<?php echo $codigo_turma ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
    <a href="form_alterar_Turma.php?id=<?php echo $codigo_turma ?>" type="button" class="btn btn-primary pull-right">Alterar</a><br><br>
<?php
}
?>


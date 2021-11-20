<?php

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM professor";

$result = mysqli_query($connx, $sql);

while ($dados = mysqli_fetch_assoc($result)) {
    $cpf_professor = $dados['cpf'];
    $nome = $dados['nome'];
    $senha = $dados['senha'];
    $situacao = $dados['situacao'];

    echo "Cod: " . $cpf_professor . "<Br>" .
        "Nome: " . $nome . "<Br>" .
        "Senha: " . $senha . "<Br>" .
        "Situação: " . $situacao . "<Br>";

?>
    <a href="excluir_professor.php?id=<?php echo $cpf_professor ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
    <a href="form_alterar_professor.php?id=<?php echo $cpf_professor ?>" type="button" class="btn btn-primary pull-right">Alterar</a><br><br>
<?php
}
?>


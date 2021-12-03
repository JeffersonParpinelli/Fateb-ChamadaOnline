<?php

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM calendario"; 

$result = mysqli_query($connx, $sql);

while ($dados = mysqli_fetch_assoc($result)) {
    $id_calendario = $dados['codigo'];
    $semestreAno_calendario = $dados['semestreAno'];


    echo "Cod: " . $id_calendario . "<Br>" .
        "Semestre/Ano: " . $semestreAno_calendario . "<Br>";

?>
    <a href="excluir_Calendario.php?id=<?php echo $id_calendario ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
    <a href="form_alterar_Calendarioo.php?id=<?php echo $id_calendario ?>" type="button" class="btn btn-primary pull-right">Alterar</a><br><br>
<?php
}
?>


<?php

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM evento"; 

$result = mysqli_query($connx, $sql);

while ($dados = mysqli_fetch_assoc($result)) {
    $id_calendarioEvento = $dados['codigo'];
    $tipo = $dados['tipo'];


    echo "Cod: " . $id_calendarioEvento . "<Br>" .
        "Tipo: " . $tipo . "<Br>";

?>
    <a href="excluir_CalendarioEvento.php?id=<?php echo $id_calendarioEvento ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
    <a href="form_alterar_Calendario.php?id=<?php echo $id_calendarioEvento ?>" type="button" class="btn btn-primary pull-right">Alterar</a><br><br>
<?php
}
?>


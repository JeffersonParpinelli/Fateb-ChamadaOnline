<?php

$host = 'localhost';
$user = 'root';
$password = '';
$bd_name = 'agenda';

$connx = mysqli_connect($host, $user, $password, $bd_name);

if($connx){
	echo'Conexão realizada com sucesso';
}else{
	echo'erro';
}

?>
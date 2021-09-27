<?php
/*	
    //Connect To Database
	$hostname="localhost:8080";
	$username="root";
	$password="root";
	$dbname="chamada";
	$usertable="curso";
	$yourfield = "your_field";
	
	$con = mysqli_connect($hostname,$username, $password, $dbname) or die ("html>script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)/script>/html>");
	
	# Check If Record Exists
	
	$query = "SELECT * FROM $usertable";
	
	$result = mysqli_query($con, $query);
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Name: ".$name."br/>";
		}
	}
?>*/
$servername = "http://localhost:3306";
$database = "chamada";
$username = "root";
$password = "root";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>


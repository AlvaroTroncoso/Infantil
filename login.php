<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "multimedio";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$pass = $_POST["password"];

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: admin.php");
	
}
else if ($nr == 0) 
{
	//header("Location: login.html");
	//echo "No ingreso"; 
	echo "<script> alert('Ingrese los datos correctamente');window.location= 'login.html' </script>";
}
	


?>
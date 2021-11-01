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

if (isset($_POST['guardar'])) {
  $titulo = $_POST['titulo'];
  $url = $_POST['url'];
  $descripcion = $_POST['descripcion'];


$query = "INSERT INTO video(titulo, url, descripcion) VALUES ('$titulo', '$url', '$descripcion')";
$resultado = $conn->query($query);

$_SESSION['message'] = 'Se ha guardado Correctamente';
  $_SESSION['message_type'] = '&eacute;xito';

    header("location: edit.php") ;

}

//$query = "SELECT url,descripcion FROM video";
//if ($resultado = $conn->query($query)) {

    /* obtener un array asociativo */
  //  while ($fila = $resultado->fetch_assoc()) {
    //    printf ("%s (%s)\n", $fila["url"], $fila["descripcion"]);
    //}

    /* liberar el conjunto de resultados */
    //$resultado->free();
//}

/* cerrar la conexión */
/*$conn->close();*/


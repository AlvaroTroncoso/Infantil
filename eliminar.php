<?php

include("video.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM video WHERE id = $id";
  $result = $conn->query($query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha eliminado correctamente';
  $_SESSION['message_type'] = 'ERROR';
  header('Location: edit.php');
}

?>

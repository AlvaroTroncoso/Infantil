<?php
include("video.php");
$url = '';
$descripcion= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM video WHERE id=$id";
  $result = $conn->query($query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $titulo = $row['titulo'];
    $url = $row['url'];
    $descripcion = $row['descripcion'];
  }
}

if (isset($_POST['editar'])) {
  $id = $_GET['id'];
  $titulo= $_POST['titulo'];
  $url= $_POST['url'];
  $descripcion = $_POST['descripcion'];

  $query = "UPDATE video set titulo = '$titulo', url = '$url', descripcion = '$descripcion' WHERE id=$id";
  $conn->query($query);
  $_SESSION['message'] = 'Se ha editado correctamente';
  $_SESSION['message_type'] = 'ERROR';
  header('Location: edit.php');
}

?>
<?php include('templates/header.php'); ?>
      <form action="editcont.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="titulo" type="text" class="form-control" value="<?php echo $titulo; ?>" placeholder="t&iacute;tulo">
        </div>
        <div class="form-group">
        <textarea name="url" class="form-control" cols="20" rows="10"><?php echo $url;?></textarea>
        </div>
          <div class="form-group">
          <input name="descripcion" type="text" class="form-control" value="<?php echo $descripcion; ?>" placeholder="Descripci&oacute;n">
        </div>
        <button class="btn btn-success" name="editar">
          editar
        </button>
      
      </form>
      
<?php include('templates/footer.php'); ?>

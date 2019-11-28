<?php 
  $foto = $_GET['foto'];
  $album = $_GET['album'];

  unlink('albuns/'. $album . '/' . $foto);

  header('Location: editar.php?nome='.$album);
?>
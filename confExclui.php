<?php 
  $nome = $_GET['nome'];

  function delTree($dir) { 
    $files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
      (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    } 
    return rmdir($dir); 
  }

  delTree('albuns/' . $nome);

  header('Location: albuns.php');
?>
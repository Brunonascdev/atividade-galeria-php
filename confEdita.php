<?php 
  $nome = $_GET['nome'];
  $novoNome = $_POST['novoNome'];

  rename('albuns/'.$nome,'albuns/'.$novoNome); 

  header('Location: editar.php?nome='.$novoNome);
?>
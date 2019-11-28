<?php 
  $nome = $_POST['nome'];
  mkdir('albuns/'. $nome .'/');
  $dir = 'albuns/'. $nome .'/';
  $foto = $_FILES['cover'];

  $novo_nome = 'cover'. '.jpg'; //Definindo um novo nome para o arquivo 

  move_uploaded_file($foto['tmp_name'], $dir.$novo_nome); //Fazer upload do arquivo 

  $caminhoIMG = $dir.$novo_nome;

  header('Location: albuns.php');
                  
?>
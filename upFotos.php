<?php
$album = $_GET['nome'];
//diretório para salvar as imagens
$diretorio = "albuns/".$album;
//Verificar a existência do diretório para salvar as imagens e informa se o caminho é um diretório
if(!is_dir($diretorio)){ 
    echo "Pasta $diretorio nao existe";
}else{    
    $arquivo = isset($_FILES['fotos']) ? $_FILES['fotos'] : FALSE;
    //loop para ler as imagens
    for ($controle = 0; $controle < count($arquivo['name']); $controle++){        
        $destino = $diretorio."/".$arquivo['name'][$controle];
        //realizar o upload da imagem em php
        //move_uploaded_file — Move um arquivo enviado para uma nova localização
        if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
            echo "Upload realizado com sucesso<br>"; 
        }else{
            echo "Erro ao realizar upload";
        }        
    }
}

header('Location: editar.php?nome='.$album);
?>
<?php 
  $album = $_GET['nome'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="img/favico.ico" />
    <title>KOJI こうじ Gallery</title>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        
    </script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p></p>
          <h1 class="text-center">KOJI こうじ Gallery</h1>
          <h5 class="text-center">Salve suas fotos em qualquer lugar!</h5>
          <p></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
              <img src="img/logo.svg" width="30" height="30" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html"
                    >Início <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="albuns.php">Álbuns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sobre.html">Sobre</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <p></p>
      <div class="row">     
        <div class="col-md-12">
        <div class="card">    
            <h5 class="card-header"><img src="icons/arrow-left.svg" width="30" height="30" title="Voltar" onclick="location.href='albuns.php'">Editar o álbum <?php echo $album; ?></h5>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                <h5 class="card-title">Renomear</h5>
              <p class="card-text">Insira aqui um novo nome ao seu álbum</p>
              <form action="confEdita.php?nome=<?php echo $album; ?>" method="post">
                <p></p>
                <input type="text" name="novoNome" id="" class="form-control" placeholder="Nome do álbum" style="width: 100%;">
                <p></p>
                 <button class="btn btn-block btn-outline-dark">Renomear</button>
                </div>
                </form>  
                <div class="col-md-3">
                <h5 class="card-title">Alterar foto de capa</h5>
              <p class="card-text">Selecione abaixo uma nova foto para ser a capa de seu álbum:</p>
              <form action="confEditaFoto.php?nome=<?php echo $album; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                <input type="file" name="cover" class="btn btn-dark" accept="image/jpg" style="width: 100%;" onchange="readURL(this);">
                <p></p>
                <button class="btn btn-outline-dark btn-block" type="submit">Mudar capa</button>
                </div>
                </form>
                </div>
                <div class="col-md-3">
                  <img src="albuns/<?php echo $album; ?>/cover.jpg" onerror="this.src='img/default.jpg'" id="blah" alt="" width="100%" height="100%" style="border: 4px solid grey;">
                </div>               
              </div>
              <div class="row">
                  <div class="col-md-12">
                  <hr>
                  <p class="card-text">Selecione abaixo uma nova foto para ser a capa de seu álbum:</p>
                  <form action="upFotos.php?nome=<?php echo $album; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <input type="file" name="fotos[]" multiple="multiple" class="btn btn-dark" accept="image/jpg" style="width: 100%;">
                    <p></p>
                    <button class="btn btn-outline-dark btn-block" type="submit">Enviar imagens</button>
                    </div>
                    </form>
                  </div>
                </div>
            </div>
            
          </div>
        </div>        
      </div>
      <p></p>
        <div class="row">
        <?php
          $path = "albuns/". $album ."";
            $x = scandir($path); //any directory
            foreach ($x as $key => $value) {
                    if ('.' !== $value && '..' !== $value){
                      // if ($value !== ''){
                        echo "<div class='col-md-4'><div class='card'><img src='". $path . "/" .$value."' class='card-img-top'><div class='card-body'><p class='card-text'>". $value ."</p><a href='excluirFoto.php?foto=". $value ."&album=". $album ."' class='btn btn-block btn-outline-danger'>Excluir</a></div></div></div><br>";
                      // }                                    
              }
            }
         ?> 
         
        </div>
        <p></p>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

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
    <script src="js/jquery-3.4.1.min.js"></script>
    <title>KOJI こうじ Gallery - Álbuns</title>
  </head>
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
                    >Início </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="albuns.php">Álbuns<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sobre.html">Sobre</a>
                </li>
              </ul>
            </div>
          </nav>
          <p></p>
        </div>
      </div>
      <div class="row">     
        <div class="col-md-12">
        <div class="card">    
            <h5 class="card-header">Criar novo álbum</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                <h5 class="card-title">Rápido e fácil!</h5>
              <p class="card-text">Crie um novo álbum e de um upload de suas fotos!</p>
              <form action="criar.php" method="post" enctype="multipart/form-data">
                <p></p>
                <input type="text" name="nome" id="" class="form-control" placeholder="Nome do álbum" style="width: 100%;">
                 
                </div>
                <div class="col-md-3">
                <h5 class="card-title">Adicionar capa do albúm</h5>
              <p class="card-text">Selecione abaixo uma foto para ser a capa de seu álbum:</p>
              
                <div class="form-group">
                <input type="file" name="cover" class="btn btn-dark" accept="image/jpg" style="width: 100%;" onchange="readURL(this);">
                <p></p>
                <button class="btn btn-outline-dark btn-block" type="submit">Criar álbum</button>
                </div>
              </form>    
                </div>
                <div class="col-md-3">
                  <img src="img/default.jpg" id="blah" alt="" width="100%" height="100%" style="border: 4px solid grey;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p></p>
      <hr>
              <h4>Álbuns</h4>
      <div class="row">
        <?php       
          $path = "albuns/";
          $x = scandir($path); //any directory
          foreach ($x as $key => $value) {
                  if ('.' !== $value && '..' !== $value){
              echo '<div class="col-md-4"><div class="card" style="margin-top: 5%;"><img src="albuns/'. $value .'/cover.jpg" class="card-img-top album" alt="..." onerror="this.src=\'img/default.jpg\'"><div class="card-body"><h5 class="card-title">'. $value .'</h5> <a href="editar.php?nome='. $value .'" class="btn btn-warning">Editar</a><a href="ver.php?nome='. $value .'" class="btn btn-dark" style="margin-left: 5px">Ver</a><a href="confExclui.php?nome='. $value .'" class="btn btn-danger" style="margin-left: 5px">Excluir</a></div></div></div><br>';
            }
          }                      
        ?>
      </div>
      <p></p>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
  // $(document).ready(function()
  //         {
  //             $(".album").on("error", function(){
  //                 $(this).attr('src', 'img/default.jpg');
  //             });
  //         });
</script>
</div>
  </body>
</html>

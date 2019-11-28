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
                <li class="nav-item active">
                  <a class="nav-link" href="#"
                    >Início <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="albuns.php">Álbuns</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p></p>
          <h4 class="text-center">Deseja realmente excluir o álbum <span id='resenha'><?php echo "'".$album."'"; ?></span>?</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <button class="btn btn-block btn-outline-danger" onclick="javascript:location.href='confExclui.php?nome=<?php echo $album; ?>'"> Excluir </button>
        </div>
        <div class="col-md-6">
        <button class="btn btn-block btn-outline-dark" onclick="javascript:location.href='albuns.php'"> Voltar </button>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

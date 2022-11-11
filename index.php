<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dis.css">
<meta charset="utf-8">
<title>RICKY Y MORTY</title>
<link rel="shortcut icon" href="letras.png">
<link href="diseño1.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <style>
    body {
      background-image: url('fondo3.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
  <img src="logo.png" alt="Bootstrap" width="60" height="54">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <style>
        .offcanvas {
          background-image: url('fondo.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
      </style>
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <img src="casa.png" alt="casa" width="30" height="30">
            <a class="btn" id="casa" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
          <img src="play.png" alt="casa" width="30" height="30">
            <a class="btn" href="episodios.php" id="capitulos">Capitulos</a>
          </li>
          <li class="nav-item">
          <img src="usuario.png" alt="casa" width="30" height="30">
            <a class="btn" href="personajes.php" id="personajes">Personajes</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="container" id="caracteres">
    <div class="row" id="caracteres">
            <?php
            $url = "https://rickandmortyapi.com/api/episode/1";
            $json = file_get_contents($url);
            $data = json_decode($json, true);
            $characters = $data['characters'];

            foreach ($characters as $character) {
                $json = file_get_contents($character);
                $data = json_decode($json, true);
                $name = $data['name'];
                $image = $data['image'];
                $status = $data['status'];
                $species = $data['species'];
                $gender = $data['gender'];	

                echo "<div class= 'col-12 col-md-6 col-lg-4' col-xl-3 mt-4'>
                        <div class='card mb-3'>
                            <img src='$image' class='card-img-top' alt='Imagen de $name'>
                            <div class='card-body'>
                                <h5 class='card-title'>$name</h5>
                                <p class='card-text'>Estatus: $status</p>
                                <p class='card-text'>Especie: $species</p>
                                <p class='card-text'>Genero: $gender</p>
                                </div>
                                </div>
                                </div>";
            }
            ?>
        </div>
    </div>
    <div id="alerta" class="alert alert-secondary" role="alert">
    PERSONAJES ALEATOREOS. <a href="index.php" class="alert-link" id="link1">RECARGAR LA PAGINA</a> PARA VER OTROS PERSONAJES.
</div>
    <div class="container">
        <div class="row">
            <?php
            $url = "https://rickandmortyapi.com/api/character";
            $json = file_get_contents($url);
            $data = json_decode($json, true);
            $results = $data['results'];
            $characters = array_rand($results, 3);
            foreach ($characters as $character) {
                $name = $results[$character]['name'];
                $image = $results[$character]['image'];
                $status = $results[$character]['status'];
                $species = $results[$character]['species'];
                $gender = $results[$character] ['gender'];
                echo "<div class= 'col-12 col-md-6 col-lg-4 col-xl-4 mt-5'>
                        <div class='card mb-3'>
                            <img src='$image' class='card-img-top' alt='Imagen de $name'>
                            <div class='card-body'>
                                <h5 class='card-title'>$name</h5>
                                <p class='card-text'>Estatus: $status</p>
                                <p class='card-text'>Especie: $species</p>
                                <p class='card-text'>Genero: $gender</p>
                                </div>
                                </div>
                                </div>";
            }
            ?>
        </div>
    </div>
    <div id="alerta" class="alert alert-secondary" role="alert">
      <style>
        #alerta{
          text-align: center;
        }
      </style>
        <h4 class="alert-heading">¡Atención!</h4>
        <p>Esta página web es solo para fines educativos, no se recomienda el uso de esta página para fines comerciales.</p>
        <p class="mb-0">Si desea contactar con el creador de esta página web, puede hacerlo a través de la dirección de correo electrónico: juaninf333@gmail.com</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
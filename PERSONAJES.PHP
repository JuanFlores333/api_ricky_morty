<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dis.css">
<meta charset="utf-8">
<title>RICKY Y MORTY</title>
<link rel="shortcut icon" href="letras.png">
<link href="diseño.css" rel="stylesheet" type="text/css">
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
            <a class="btn" id="casa" aria-current="page" href="index.php">Casa</a>
          </li>
          <li class="nav-item">
          <img src="play.png" alt="casa" width="30" height="30">
            <a class="btn" href="EPISODIOS.PHP" id="capitulos">Capitulos</a>
          </li>
          <li class="nav-item">
          <img src="usuario.png" alt="casa" width="30" height="30">
            <a class="btn" href="PERSONAJES.PHP" id="personajes">Personajes</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <?php
        $url = "https://rickandmortyapi.com/api/character";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $results = $data['results'];

        foreach ($results as $character){
            echo "<div class='col-6 col-md-4 col-lg-3 mt-5'>";
            echo "<div class='card mb-3'>";
            echo '<img src="'. $character['image']. '" class="card-img-top" alt="...">';
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>". $character['name']. "</h5>";
            echo "<p class='card-text'>Especie: ". $character['species']. "</p>";
            echo "<p class='card-text'>Genero: ". $character['gender']. "</p>";
            echo "<p class='card-text'>Estado: ". $character['status']. "</p>";
            echo "<p class='card-text'>Origen: ". $character['origin']['name']. "</p>";
            echo "<p class='card-text'>Ubicacion: ". $character['location']['name']. "</p>";
            // echo "<a hrf='". $character['url']. "' class='btn btn-primary'>Ver mas</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
        }
        ?>
        </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
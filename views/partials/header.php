<?php 
require_once '../BDD/model/classes/Post.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active  btn btn-outline-info ms-auto link-dark" aria-current="page" href="#">Accueil</a>
        </li>
        <?php 
        if(isset($_SESSION['user'])&& !empty($_SESSION['user'])){ ?>
            <li class="nav-item"> <a class="nav-link btn btn-outline-info ms-auto link-light" href="logout.php">Se déconnecter</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-info ms-auto link-light" href="./views/loginView.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-info ms-auto link-light" href="./views/signinView.php">S'inscrire</a>
        </li>
        <?php } 
        ?>


      </ul>
    </div>
  </div>
  
</nav>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
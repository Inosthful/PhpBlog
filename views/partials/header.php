<?php 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <title>Document</title>

</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand btn btn-outline-info" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item agrou">
                        <a class="nav-link btn btn-outline-info link-light" href="addPost.php">AddPOST</a>
                    </li>
        <?php 
        if(isset($_SESSION['user'])&& !empty($_SESSION['user'])){ ?>
            <li class="nav-item agrou"> <a class="nav-link btn btn-outline-info ms-auto link-light" href="logout.php">Se déconnecter</a>
        </li>
        <?php } else { ?>
        <li class="nav-item agrou    ">
          <a class="nav-link btn btn-outline-info ms-auto link-light" href="signin.php">S'inscrire</a>
        </li>
        <li class="nav-item agrou">
          <a class="nav-link btn btn-outline-info ms-auto link-light pl-6 pr-6" href="login.php">Se connecter</a>
        </li>

        <?php } 
        ?>


      </ul>
    </div>
  </div>
  
</nav>



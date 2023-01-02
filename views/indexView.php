<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section class="container-fluid ">
<?php

require_once 'partials/header.php';


// var_dump($posts);
?>
<section class="container">
    <div class="row d-flex justify-content-center justify-content-around">
        <?php foreach ($posts as $post) { ?>
            <div class="card col-12 col-md-4 col-lg-2">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php echo $post->getTitle() ?></h5>

                    <div class=""><a href="./single.php?id=<?php echo $post->getIdPost() ?>" class="btn btn-primary">Voir l'article</a>
        <!-- try "gap" pour les cards -->
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<section class="container-fluid">
<br>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi quam neque fuga possimus, cum iure delectus error voluptatem facere exercitationem, explicabo provident rem, beatae necessitatibus! Laboriosam provident cumque unde possimus!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique perspiciatis impedit quos sapiente ex exercitationem, repellat molestias ut optio consequuntur reiciendis possimus temporibus commodi? Est corporis enim aut ipsam?
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.canardware.com/2021/06/20173615/Lively.jpg" class="d-block w-100" alt="ntm1">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.canardware.com/2021/06/20173615/Lively.jpg" class="d-block w-100" alt="ntm2">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.canardware.com/2021/06/20173615/Lively.jpg" class="d-block w-100" alt="ntm3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<?php
require_once 'partials/footer.php';
?>
</section>
</body>
</html>


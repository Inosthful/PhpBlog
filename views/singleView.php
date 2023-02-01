<?php
require_once 'partials/header.php';
?>


<section class="container">


    <div class="d-flex flex-column justify-content-center align-items-center">
        <img class='w-50 d-flex p-5' src='<?php echo $post->getPicture() ?>' alt=''>
            <?php 
                echo $post->getContent();

            ?>
    </div>
<br>
<br>
    <div class="d-flex flex-column">
        

        <?php
        foreach($comments as $comment){
            // echo $comment->getId_user();
            echo $comment->getContent();
        }

        ?>
    </div>

     <?php if(isset($_SESSION['user'])){ ?>
    <div id="addcomment">
        <form action="" method="post">
            <div class="mb-3">
                <label for="InputContent" class="form-label">Commenter</label>
                <textarea class="form-control" id="InputContent" name="content"></textarea>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Soumettre le commentaire</button>
        </form>
    </div>
    <?php } ?>

</section>
<?php

require_once 'partials/footer.php';
?>

comment mettre jquery + son code
+ le delete je le met ou dans la view
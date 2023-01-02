<?php
require_once 'partials/header.php';
?>


<section class="container">


    <div class="d-flex flex-column justify-content-center align-items-center">
        <img class='w-25 d-flex' src='<?php echo $post->getPicture() ?>' alt=''>
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

</section>
<?php

require_once 'partials/footer.php';
?>
<?php 
require_once '../signin.php';

?>


<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
            <button class="btn"><a href="../index.php">Accueil</a></button> 

            </h1>
        </div>
    </header>
    
    <form action="" method="POST" class="col-md-6 offset-md-3 mt-5">

        <div class="mb-3">
            <label for="InputPseudo" class="form-label">Pseudo de l'utilisateur</label>
            <input type="text" class="form-control" id="InputPseudo" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="InputMail" class="form-label">Mail de l'utilisateur</label>
            <input type="text" class="form-control" id="InputMail" name="mail">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Mot de passe de l'utilisateur</label>
            <input type="password" class="form-control" id="InputPassword" name="pass">
        </div>
        <button class="btn btn-primary" type="submit">S'enregistrer</button>
    </form>






<?php
require_once 'partials/footer.php';

?>
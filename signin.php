<?php
require_once 'model/DBConnect.php';
require_once 'model/managers/UserManager.php';
session_start();

if(isset($_POST) && !empty($_POST)){
    $dbh = dbconnect();
    $pseudo = htmlentities($_POST['pseudo']);
    $email = htmlentities($_POST['email']);
    $mdp = $_POST['password'];
    $hashed_password = password_hash($mdp, PASSWORD_BCRYPT);
    UserManager::addUser($pseudo, $email, $hashed_password);
    // $sql = "INSERT INTO t_user (pseudo, email, password) VALUES (:pseudo, :email, :hashed_password)";
    // $stmt = $dbh->prepare($sql);
    // $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    // $stmt->bindParam(':hashed_password', $hashed_password, PDO::PARAM_STR);
    // $stmt->execute();
    // UserManager::connectUser();
    header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
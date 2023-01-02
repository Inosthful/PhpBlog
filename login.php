<?php
require_once 'model/DBConnect.php';


if(isset($_POST) && !empty($_POST)){
    $dbh = dbconnect();
    $mail = $_POST['mail'];
    $mdp = $_POST['pass'];
    $stmt = $dbh->prepare("SELECT * FROM t_user WHERE mail = :mail");
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
        //var_dump($user); //tester la connexion utilisateur ici ! 
        $hashed = $user['mdp'];
        $isAuthUser = password_verify($mdp, $hashed);
        if($isAuthUser){
            // var_dump($_SESSION);
            session_start();
            $_SESSION['user'] = [
                'id'=>$user['id_user'],
                'mail'=>$user['mail']
            ];
            var_dump($_SESSION);
            header("location: ../index.php");
        }
    }else{
        echo "Cet utilisateur n'existe pas";
    }
}
?>
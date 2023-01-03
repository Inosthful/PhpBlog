<?php
require_once 'model/DBConnect.php';
require_once 'model/managers/UserManager.php';


if(isset($_POST) && !empty($_POST)){
    $dbh = dbconnect();
    $email = ($_POST['email']) ;
    $mdp = $_POST['password'];
    // $stmt = $dbh->prepare("SELECT * FROM t_user WHERE email = :email");
    // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    // $stmt->execute();
    // $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $user = UserManager::getUserByEmail($email);
    $verified_password = password_verify($mdp, $user->getPassword());
    if($verified_password){
        UserManager::connectUser($user);
        // $hashed = $user['password'];
        // $isAuthUser = password_verify($mdp, $hashed);
        if($verified_password){

            // var_dump($_SESSION);
            session_start();
            $_SESSION['user'] = [
                'id'=>$user->getIdUser(),
                'email'=>$user->getEmail()
            ];
            var_dump($_SESSION);
            header("location: ../index.php");
        }
    }else{
        echo "Cet utilisateur n'existe pas";
    }
}
?>
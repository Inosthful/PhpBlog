<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>
<body>
<?php
session_start();
require_once 'model/managers/PostManager.php';

$posts = PostManager::getAllPosts();

require_once 'views/indexView.php';



?>
</body>
</html>



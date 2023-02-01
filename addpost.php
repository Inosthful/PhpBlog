<?php
session_start();
require_once 'model/managers/PostManager.php';
require_once 'model/managers/CategoryManager.php';

$categories = CategoryManager::getAllCategories();

if(isset($_SESSION['user'])){
    if(isset($_POST)&&!empty($_POST)){


            //upload de fichier
        $uploads_dir = 'assets/images';
        $tmp_name = $_FILES['picture']['tmp_name'];
        $random_string = uniqid();
        $name = $random_string.'-'.$_FILES['picture']['name'];
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        $title = $_POST['title'];

        $content = $_POST['content'];
        $userId = $_SESSION['user']['id'];
        $newPostId = PostManager::addPost($title, $name, $content, $userId);
        //ajout des catégories sélectionnées
        $postCategories = $_POST['categories'];
        /*$_POST['categories'] nous donne un tableau des catégories sélectionnées
        il suffit donc de boucler sur ce tableau et pour chaque ligne insérer
        dans la table de liaison l'id de l'article ($newPost) et l'id de la catégorie*/
        foreach($postCategories as $cat){
            PostManager::addPostCategories($newPostId, $cat);
        }


    }


    require_once 'views/addpostView.php';

}else{
    echo 'Vous ne passerez pas !!!';
}







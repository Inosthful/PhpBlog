<?php

require_once 'model/managers/PostManager.php';
require_once 'model/managers/CommentManager.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $post = PostManager::getPostById($id);
    $comments = CommentManager::getCommentsByPostId($id);
}






require_once 'views/singleView.php';
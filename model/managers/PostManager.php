<?php

require_once './model/DBConnect.php';
require_once './model/classes/Post.php';

class PostManager {

    public static function getAllPosts(){
        $dbh = dbconnect();
        $query = ("SELECT * FROM t_post");
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $post = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $post;
    }

    public static function getPostById($id){
        //retourne un seul article par rapport à son id
        $dbh = dbconnect();
        $query = ("SELECT * FROM t_post WHERE id_post = :id");
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
                //le fetch classique ne comprend pas le fecth_class d'emblée. 
        // Il faut ajoute d'abord un setFetchMode
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $post = $stmt->fetch();

        return $post;
    }
    
    public static function getPostsByCategoryId($id) {
        $dbh = dbconnect();
        $query = "SELECT * FROM t_post JOIN t_post_category ON t_post_category.id_post = t_post.id_post WHERE t_post_category.id_category = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $posts;
    }

    public static function getPostsByUserId($id) {
        $dbh = dbconnect();
        $query = "SELECT * FROM t_post JOIN t_user ON t_user.id_user = t_post.id_user WHERE t_post.id_user = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $posts;
    }

}
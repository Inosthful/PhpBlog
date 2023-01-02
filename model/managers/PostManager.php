<?php

require_once './model/DBConnect.php';
require_once './model/classes/Post.php';

class PostManager {

    public static function getAllPosts(){
        $dbh = dbconnect();
        $query = ("SELECT * FROM post");
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $post = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $post;
    }

    public static function getPostById($id){
        //retourne un seul article par rapport à son id
        $dbh = dbconnect();
        $query = ("SELECT * FROM post WHERE id_post = :id");
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
                //le fetch classique ne comprend pas le fecth_class d'emblée. 
        // Il faut ajoute d'abord un setFetchMode
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $post = $stmt->fetch();

        return $post;
    }

}
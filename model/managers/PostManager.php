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

    public static function addPost($title, $picture, $content, $userId) {
        $dbh = dbconnect();
        $date = (new DateTime())->format('Y-m-d H:i:s');
        $query = "INSERT INTO t_post (title, date, picture, content, id_user) VALUES (:title, '$date', :picture, :content, :id_user)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':picture', $picture);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':id_user', $userId);
        $stmt->execute();
        return $dbh->lastInsertId();
    }


    public static function addPostCategories($id_post, $id_category){
        $dbh  = dbconnect();
        $query = "INSERT INTO t_post_category (id_post, id_category) VALUES (:post, :cat)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':post', $id_post);
        $stmt->bindParam(':cat', $id_category);
        $stmt->execute();
        }




    public static function editPost($id, $title, $picture, $content, $userId) {
    $dbh = dbconnect();
    $date = (new DateTime())->format('Y-m-d H:i:s');
    $query = "UPDATE t_post SET title = :title, date = '$date', picture = :picture, content = :content, id_user = :id_user WHERE t_post.id_post = :id";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':picture', $picture);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':id_user', $userId);
    $stmt->execute();
}

public static function deletePostCategoriesByPostId($id){
    $dbh  = dbconnect();
    $query = "DELETE FROM t_post_category WHERE t_post_category.id_post = :id";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
    
public static function deletePost($id) {
    $dbh  = dbconnect();
    $query = "DELETE FROM t_post WHERE t_post.id_post = :id";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

}
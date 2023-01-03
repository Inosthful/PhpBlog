<?php

require_once './model/DBConnect.php';
require_once './model/classes/Comment.php';

class CommentManager {

    public static function getAllCommentByPostId($id){
        $dbh = dbconnect();
        $query = ("SELECT * FROM t_comment WHERE id_post = :id");
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $comments = $stmt->fetchAll(PDO::FETCH_CLASS, 'Comment');
        return $comments;
    }



    public static function getCommentByUserId(){
        //flemme
    }
    // public static function getCommentByPostId($id){
    //     //retourne un seul article par rapport à son id
    //     $dbh = dbconnect();
    //     $query = ("SELECT * FROM comment WHERE id_post = :id");
    //     $stmt = $dbh->prepare($query);
    //     $stmt->bindParam(':id', $id);
    //     $stmt->execute();
    //             //le fetch classique ne comprend pas le fecth_class d'emblée. 
    //     // Il faut ajoute d'abord un setFetchMode
    //     $stmt->setFetchMode(PDO::FETCH_CLASS, 'Comment');
    //     $comment = $stmt->fetch();

    //     return $comment;
    // }

}
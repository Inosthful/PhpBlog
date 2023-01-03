<?php

require_once './model/DBConnect.php';

class Post{

    private $id_post;

    private $title;

    private $datePub;

    private $content;

    private $picture;

    private $id_user;


    public function getIdPost(){
        return $this->id_post;
    }
    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->datePub;
    }
    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }
    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_post
     *
     * @return  self
     */ 
    public function setId_post($id_post)
    {
        $this->id_post = $id_post;

        return $this;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($datePub)
    {
        $this->datePub = $datePub;

        return $this;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
}
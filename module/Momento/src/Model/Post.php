<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Momento\Model;

/**
 * Description of Post
 *
 * TODO: Maybe we can use ArrayAccess method?
 * @author jorgen
 */
class Post {

    private $id;
    private $author;
    private $title;
    private $created;
    private $text;

    /**
     * Constructs a blog item
     */
    public function __construct() {
    }

    /** GETTERS */
    /* No setters because post entries can be
     * cached in repository.*/
    /** GETTERS */

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
}

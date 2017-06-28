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
    private $title;
    private $text;
    private $creationDate;
    private $authorId;
    private $numViews;
    private $nextId;
    private $prevId;

    /**
     * @var User
     */
    private $author;

    /**
     * Constructs a blog item
     */
    public function __construct() {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @return mixed
     */
    public function getNumViews()
    {
        return $this->numViews;
    }

    /**
     * @param mixed $numViews
     */
    public function setNumViews($numViews)
    {
        $this->numViews = $numViews;
    }

    /**
     * @return mixed
     */
    public function getNextId()
    {
        return $this->nextId;
    }

    /**
     * @param mixed $nextId
     */
    public function setNextId($nextId)
    {
        $this->nextId = $nextId;
    }

    /**
     * @return mixed
     */
    public function getPrevId()
    {
        return $this->prevId;
    }

    /**
     * @param mixed $prevId
     */
    public function setPrevId($prevId)
    {
        $this->prevId = $prevId;
    }

    /**
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }


}

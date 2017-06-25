<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Model;

/**
 * Description of Blog
 *
 * TODO: Maybe we can use ArrayAccess method?
 * @author jorgen
 */
class Blog {

    public $id;
    public $authorId;         // Array of user data
    public $title;
    public $description;
    public $created;
    public $text;

    public $author;

    /**
     * Constructs a blog item
     */
    public function __construct() {
        $this->author = new User();
    }
    
    public function exchangeArray($data) {
        $this->id                   =  empty($data['id'])               ? null : $data['id'];
        $this->authorId             =  empty($data['author'])           ? null : $data['author'];
        $this->title                =  empty($data['title'])            ? null : $data['title'];
        $this->description          =  empty($data['description'])      ? null : $data['description'];
        $this->created              =  empty($data['created'])          ? null : $data['created'];
        $this->text                 =  empty($data['text'])             ? null : $data['text'];

        $this->author->exchangeArray($data, 'user.');
    }
    
    public function getArrayCopy() {
        return [
            'id'      => $this->id,
            'author'  => $this->authorId,
            'description' => $this->description,
            'created' => $this->created,
            'text'    => $this->text,
        ];
    }
}

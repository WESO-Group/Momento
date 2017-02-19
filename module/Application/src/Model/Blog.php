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
    public $author;         // Array of user data
    public $title;
    public $description;
    public $created;
    public $text;

    /**
     * Constructs a blog item
     */
    public function __construct() {

    }
    
    public function exchangeArray($data) {
        $this->id                   =  empty($data['id'])               ? null : $data['id'];
        $this->author['id']         =  empty($data['author'])           ? null : $data['author'];
        $this->author['name']       =  empty($data['author_name'])      ? null : $data['author_name'];
        $this->author['surname']    =  empty($data['author_surname'])   ? null : $data['author_surname'];
        $this->author['nickname']   =  empty($data['author_nickname'])  ? null : $data['author_nickname'];
        $this->title                =  empty($data['title'])            ? null : $data['title'];
        $this->description          =  empty($data['description'])      ? null : $data['description'];
        $this->created              =  empty($data['created'])          ? null : $data['created'];
        $this->text                 =  empty($data['text'])             ? null : $data['text'];
    }
    
    public function getArrayCopy() {
        return [
            'id'      => $this->id,
            'author'  => $this->author['id'],
            'created' => $this->created,
            'text'    => $this->text,
        ];
    }
    
    public function getAuthorDisplayName() {
        return $this->author['name'] . ' ' .
               $this->author['surname'] . ' (' .
               $this->author['nickname'] . ')';
    }
}

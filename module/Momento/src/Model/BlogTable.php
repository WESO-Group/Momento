<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Momento\Model;

use Zend\Db\Sql\Select;

class BlogTable { 
    
    /**
     *
     * @var type TableGatewayInterface
     */
    private $table;

    /**
     *
     * @var type TableGatewayInterface
     */
    private $userTable;
    
    public function __construct($table, $userTable) {
        $this->table = $table;
        $this->userTable = $userTable;
    }
    
    public function getBlogs($limit = -1, $offset = 0) {
        $blogs = $this->table->select(function(Select $select) use ($limit, $offset) {
            $select->offset($offset);
            
            if ( $limit !== -1 ) {
                $select->limit($limit);
            }

            $select->join(['u' => 'users'], 'u.id = author', [
                "user.id"           => "id",
                "user.name"         => "name",
                "user.surname"      => "surname",
                "user.nickname"     => "nickname",
                "user.gender"       => "gender",
                "user.description"  => "description",
                "user.age"          => "age",
                "user.registration_date" => "registration_date",
                "user.lastseen_date"     => "lastseen_date",
                "user.level"        => "level",
                "user.avatar"       => "avatar",
            ], Select::JOIN_INNER);

            $select->order("created DESC");
        });

        return $blogs;
    }
    
    /**
     * Retrieves a blog item from table
     * 
     * @param type $id
     */
    public function getBlog($id) {
        $results = $this->table->select([
            'id' => 2
        ]);
        
        return $results->current(); 
    }
    
    /**
     * Saves blog in blogs table
     * @param \Application\Model\Post $blog
     */
    public function saveBlog(Post $blog) {
        
    }
}
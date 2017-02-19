<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Model;

use Zend\Db\Sql\Select;

class BlogTable { 
    
    /**
     *
     * @var type TableGatewayInterface
     */
    private $table;
    
    public function __construct($table) {
        $this->table = $table;
    }
    
    public function getBlogs($limit = -1, $offset = 0) {
        
        xdebug_break();
        $blogs = $this->table->select(function(Select $select) use ($limit, $offset) {
            $select->offset($offset);
            
            if ( $limit !== -1 ) {
                $select->limit($limit);
            }
            
            $select->join(
                    'users', 'users.id = blogs.author',
                    array('author_name'    => 'name',
                          'author_surname' => 'surname',
                          'author_nickname'=> 'nickname'));
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
     * @param \Application\Model\Blog $blog
     */
    public function saveBlog(Blog $blog) {
        
    }
}
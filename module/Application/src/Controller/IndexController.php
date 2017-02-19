<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Model\BlogTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    private $blogsTable;
    
    /**
     * Constructor
     * @param BlogTable $table
     */
    public function __construct(BlogTable $table) {
        $this->blogsTable = $table;
    }
    
    /**
     * Displays the list of modules
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel([
           'blogs' => $this->blogsTable->getBlogs()
        ]);
    }
}

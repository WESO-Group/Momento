<?php

namespace Momento\Controller;

use Momento\Model\PostRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * Constructor
     *
     * @param PostRepositoryInterface $repository
     */
    public function __construct(PostRepositoryInterface $repository) {
        $this->postRepository = $repository;
    }
    
    /**
     * Displays the list of modules
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel([
           'posts' => $this->postRepository->findAllPosts()
        ]);
    }
}

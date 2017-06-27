<?php

namespace Momento\Factory;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Momento\Controller\IndexController;
use Momento\Model\PostRepository;
use Momento\Model\PostRepositoryInterface;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Created by PhpStorm.
 * User: archie
 * Date: 26.06.17
 * Time: 20:57
 */
class IndexControllerFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new IndexController($container->get(PostRepositoryInterface::class));
    }
}
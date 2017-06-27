<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 26.06.17
 * Time: 21:42
 */

namespace Momento\Factory;


use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Momento\Hydrator\PostHydrator;
use Momento\Hydrator\UserHydrator;
use Momento\Model\Post;
use Momento\Model\PostSqlRepository;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Hydrator\Aggregate\AggregateHydrator;
use Zend\Hydrator\Reflection;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class PostSqlRepositoryFactory implements FactoryInterface
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
        // Need to hydrate nested user data in post entity
        $aggregateHydrator = new AggregateHydrator();
        $aggregateHydrator->add(new PostHydrator());
        $aggregateHydrator->add(new UserHydrator());

        return new PostSqlRepository($container->get(AdapterInterface::class),
            $aggregateHydrator, new Post());
    }
}
<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Momento;

use Momento\Controller\IndexController;
use Momento\Model\Post;
use Momento\Model\BlogTable;
use Momento\Model\User;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature;

class Module implements
        Feature\ConfigProviderInterface,
        Feature\ServiceProviderInterface,
        Feature\ControllerProviderInterface
{
    const VERSION = '0.0.1';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getServiceConfig() {
        return array(
            'factories' => [
                BlogTable::class => function($container) {
                    $blogsGateway = $container->get(Model\BlogTableGateway::class);
                    $usersGateway = $container->get(Model\UserTableGateway::class);

                    return new BlogTable($blogsGateway, $usersGateway);
                },
                Model\BlogTableGateway::class => function($containter) {
                    $adapter = $containter->get(AdapterInterface::class);
                    $resultSetProto = new ResultSet();
                    $resultSetProto->setArrayObjectPrototype(new Post());

                    return new TableGateway('blogs', $adapter, null, $resultSetProto);
                },
                Model\UserTableGateway::class => function($sm) {
                    $adapter = $sm->get(AdapterInterface::class);
                    $resultSetProto = new ResultSet();
                    $resultSetProto->setArrayObjectPrototype(new User());

                    return new TableGateway('users', $adapter, null, $resultSetProto);
                },
            ]
        );
    }

    public function getControllerConfig() {
        return [
            'factories' => [
                IndexController::class => function($container) {
                    return new IndexController(
                            $container->get(BlogTable::class)
                    );
                }
            ]
        ];
    }
}

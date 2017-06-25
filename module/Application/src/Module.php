<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Application\Controller\IndexController;
use Application\Model\Blog;
use Application\Model\BlogTable;
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
                    $gateway = $container->get(Model\BlogTableGateway::class);
                    return new BlogTable($gateway);
                },
                Model\BlogTableGateway::class => function($containter) {
                    $adapter = $containter->get(AdapterInterface::class);
                    $resultSetProto = new ResultSet();
                    $resultSetProto->setArrayObjectPrototype(new Blog());

                    return new TableGateway('blogs', $adapter, null, $resultSetProto);
                }
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

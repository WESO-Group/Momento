<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Momento;

use Momento\Controller\IndexController;
use Momento\Factory\IndexControllerFactory;
use Momento\Factory\PostSqlRepositoryFactory;
use Momento\Model\PostRepository;
use Momento\Model\PostRepositoryInterface;
use Momento\Model\PostSqlRepository;
use Zend\ModuleManager\Feature;
use Zend\ServiceManager\Factory\InvokableFactory;

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
                PostRepository::class => InvokableFactory::class,
                PostSqlRepository::class => PostSqlRepositoryFactory::class
            ],

            'aliases' => [
                PostRepositoryInterface::class => PostSqlRepository::class
            ]
        );
    }

    public function getControllerConfig() {
        return [
            'factories' => [
                IndexController::class => IndexControllerFactory::class,
            ]
        ];
    }
}

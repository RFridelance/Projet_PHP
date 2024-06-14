<?php

namespace ContainerWaffkF6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ListUserController' shared autowired service.
     *
     * @return \App\Controller\ListUserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ListUserController.php';

        $container->services['App\\Controller\\ListUserController'] = $instance = new \App\Controller\ListUserController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\ListUserController', $container));

        return $instance;
    }
}

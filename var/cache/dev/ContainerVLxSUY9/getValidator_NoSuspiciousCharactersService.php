<?php

namespace ContainerVLxSUY9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_NoSuspiciousCharactersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'validator.no_suspicious_characters' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/NoSuspiciousCharactersValidator.php';

        return $container->privates['validator.no_suspicious_characters'] = new \Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator([]);
    }
}

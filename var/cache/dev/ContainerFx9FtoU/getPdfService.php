<?php

namespace ContainerFx9FtoU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPdfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Knp\Snappy\Pdf' shared autowired service.
     *
     * @return \Knp\Snappy\Pdf
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-snappy/src/Knp/Snappy/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-snappy/src/Knp/Snappy/AbstractGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-snappy/src/Knp/Snappy/Pdf.php';

        $container->privates['Knp\\Snappy\\Pdf'] = $instance = new \Knp\Snappy\Pdf($container->getEnv('WKHTMLTOPDF_PATH'), []);

        $instance->setLogger(($container->privates['logger'] ?? self::getLoggerService($container)));

        return $instance;
    }
}

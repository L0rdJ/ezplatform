<?php

namespace AppBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class AppExtension extends Extension implements PrependExtensionInterface
{
    /**
     *{@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        (new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config')))
            ->load('services.yml');
    }

    /**
     * {@inheritdoc}
     */
    public function prepend(ContainerBuilder $container): void
    {
    }
}

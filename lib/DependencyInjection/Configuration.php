<?php
declare(strict_types=1);

namespace Smart\OpenAIBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('smart_open_ai');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('open_ai')
                    ->children()
                        ->scalarNode('token')->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
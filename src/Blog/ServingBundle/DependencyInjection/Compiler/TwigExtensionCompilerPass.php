<?php
// src/Blog/ServingBundle/DependencyInjection/Compiler/TwigExtensionCompilerPass.php
namespace Blog\ServingBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class TwigExtensionCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // always first check if the primary service is defined
        if (!$container->has('blog.twig_extension_chain')) {
            return;
        } else {
            var_dump('service existe bien !!!');
            
        }

        $definition = $container->findDefinition('blog.twig_extension_chain');

        // find all service IDs with the app.mail_transport tag
        $taggedServices = $container->findTaggedServiceIds('twig.extension');
var_dump(count($taggedServices));
        foreach ($taggedServices as $id => $tags) {
//            foreach ($tags as $attributes) {
                // add the transport service to the ChainTransport service
//                $definition = $container->findDefinition('logger');
//                $definition->addMethodCall('debug', array('Logger CREATED!'));
        
        
//                $definition->addMethodCall('addExtension', 
//                    array(
//                        new Reference($id),
//                        $attributes["alias"]
//                ));
                $definition->addMethodCall('getTest2', array(new Reference($id)));
//             }    
        }
    }
}

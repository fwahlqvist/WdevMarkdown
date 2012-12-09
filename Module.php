<?php
namespace WdevMarkdown;
 
use WdevMarkdown\View\Helper\Markdown;
 
class Module
{
    
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    
    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'Markdown' => function($sm) {
                    $locator = $sm->getServiceLocator();
                    return new Markdown($locator->get('Request'));
                },
            ),
        );
    }
}
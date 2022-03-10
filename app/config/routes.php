<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routesItems =  [
    ['name' => 'default' , 'path' => '/', 'controller' => 'UrlGeneratorController::index'],
    ['name' => 'getUrls' , 'path' => '/urls', 'controller' => 'UrlGeneratorController::getUrls'],
    ['name' => 'getUrl' , 'path' => '/urls/{id}', 'controller' => 'UrlGeneratorController::getUrl'],
    ['name' => 'createUrl' , 'path' => '/url/creat', 'controller' => 'UrlGeneratorController::createUrl'],
];

$routes = new RouteCollection();
foreach ($routesItems as $route)
{
    $controllerName = sprintf('Semrush\HomeTest\Controller\%s', $route['controller']);
    $routes->add($route['name'], new Route($route['path'], [
        '_controller' => $controllerName,
        ]));

}

return $routes;

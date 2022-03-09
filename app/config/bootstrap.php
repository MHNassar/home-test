<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Semrush\HomeTest\HTTPCore;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

require dirname(__DIR__).'/vendor/autoload.php';

$routesItems = include __DIR__.'/routes.php';
$routes = new RouteCollection();
foreach ($routesItems as $route)
{
    $controllerName = sprintf('Semrush\HomeTest\Controller\%s', $route['controller']);
    $routes->add($route['name'], new Route($route['path'], [
        '_controller' => $controllerName,
        ]));

}
$request = Request::createFromGlobals();
$context = new RequestContext();
$matcher = new UrlMatcher($routes, $context);
$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();
$app = new HTTPCore($matcher, $controllerResolver, $argumentResolver);
$response = $app->handle($request);
$response->send();

<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Semrush\HomeTest\HTTPCore;
use Semrush\HomeTest\Controller\DefaultController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Our framework is now handling itself the request
$app = new HTTPCore();


$app->addRoute('index','/hello/{name}','DefaultController::index');
//$app->map('/', $def->index());
//
//$app->map('/about', function () {
//    return new Response('This is the about page');
//});
//
//$app->map('/hello/{name}', function ($name) {
//    return new Response('Hello '.$name);
//});

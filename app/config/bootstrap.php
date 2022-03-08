<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Semrush\HomeTest\HTTPCore;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Our framework is now handling itself the request
$app = new HTTPCore();

$app->map('/', function () {
    return new Response('This is the home page');
});

$app->map('/about', function () {
    return new Response('This is the about page');
});

$app->map('/hello/{name}', function ($name) {
    return new Response('Hello '.$name);
});

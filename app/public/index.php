<?php

require dirname(__DIR__).'/config/bootstrap.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$response = $app->handle($request);
$response->send();

<?php
use Symfony\Component\HttpFoundation\Request;

$app = include dirname(__DIR__).'/config/bootstrap.php';

$request = Request::createFromGlobals();

$response = $app->handle($request);
$response->send();

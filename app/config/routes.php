<?php

return [
    ['name' => 'default' , 'path' => '/', 'controller' => 'UrlGeneratorController::index'],
    ['name' => 'getUrls' , 'path' => '/urls', 'controller' => 'UrlGeneratorController::getUrls'],
    ['name' => 'getUrl' , 'path' => '/urls/{id}', 'controller' => 'UrlGeneratorController::getUrl'],
    ['name' => 'createUrl' , 'path' => '/url/creat', 'controller' => 'UrlGeneratorController::creatUrl'],
];

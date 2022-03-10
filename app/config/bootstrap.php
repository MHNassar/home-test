<?php

require dirname(__DIR__).'/vendor/autoload.php';


$container = include __DIR__.'/container.php';

return $container->get('app');


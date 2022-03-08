<?php

namespace Semrush\HomeTest\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{

    public function index($name)
    {
        return new Response('Nope, this is not a leap year.'.$name);
    }
}

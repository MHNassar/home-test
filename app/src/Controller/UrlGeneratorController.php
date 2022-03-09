<?php

namespace Semrush\HomeTest\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UrlGeneratorController
{

    public function index(Request $request)
    {
       return new JsonResponse([
           'tet' => 'tete'
       ]);
    }
}

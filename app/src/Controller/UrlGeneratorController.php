<?php

namespace Semrush\HomeTest\Controller;

use Semrush\HomeTest\Service\UrlGeneratorService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UrlGeneratorController
{
    private UrlGeneratorService $service;
    public function __construct()
    {
        $this->service = new UrlGeneratorService();
    }

    public function index(Request $request)
    {
       return new JsonResponse([
           'message' => 'HTTP API to fetch urls'
       ]);
    }

    public function creatUrl(Request $request)
    {
        $requestBody = $request->toArray();
        $url = isset($requestBody['url'])?? null;
        if (!empty($url))
        {
            $status = $this->service->saveUrl($url);
            if ($status)
            {
                return new JsonResponse([
                    'message' => 'Url saved successfully'
                ],Response::HTTP_CREATED);
            }
        }

        return new JsonResponse([
            'message' => 'something error happens'
        ],Response::HTTP_BAD_REQUEST);
    }

    public function getUrls()
    {
        $urls = $this->service->getAll();
        return new JsonResponse($urls,Response::HTTP_OK);
    }

    public function getUrl($id)
    {
        $url = $this->service->getOne($id);
        $status = Response::HTTP_OK;
        if (count($url) == 0)
        {
            $status = Response::HTTP_NOT_FOUND;
        }
        return new JsonResponse($url, $status);
    }
}

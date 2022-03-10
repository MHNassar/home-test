<?php

namespace Semrush\HomeTest;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\EventListener\ResponseListener;
use Symfony\Component\HttpKernel\EventListener\RouterListener;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;


class HTTPCore extends HttpKernel
{
//    public function __construct($routes)
//    {
//        $requestStack = new RequestStack();
//        $controllerResolver = new ControllerResolver();
//        $argumentResolver = new ArgumentResolver();
//        $dispatcher = new EventDispatcher();
//
//        $context = new RequestContext();
//        $matcher = new UrlMatcher($routes, $context);
//        $dispatcher->addSubscriber(new RouterListener($matcher, $requestStack));
//        $dispatcher->addSubscriber(new ResponseCacheListener());
//        parent::__construct($dispatcher, $controllerResolver, $requestStack, $argumentResolver);
//    }

}

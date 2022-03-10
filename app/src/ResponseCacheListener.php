<?php

namespace Semrush\HomeTest;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ResponseCacheListener implements EventSubscriberInterface
{

    public function onResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();
        $requestMethod = $event->getRequest()->getMethod();
        // To cache Get requests for 1 Min
        if ($requestMethod == 'GET')
        {
            $response->setTtl(60);
        }
    }

    public static function getSubscribedEvents():array
    {
        return [KernelEvents::RESPONSE => 'onResponse'];
    }

}

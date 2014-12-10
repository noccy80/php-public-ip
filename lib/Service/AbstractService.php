<?php

namespace NoccyLabs\PublicIp\Service;

use NoccyLabs\PublicIp\Http\HttpRequest;

abstract class AbstractService
{
    protected function createHttpRequest($url, $method="GET")
    {
        return new HttpRequest($url, $method);
    }
}

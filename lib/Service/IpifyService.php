<?php

namespace NoccyLabs\PublicIp\Service;

class IpifyService extends AbstractService
{
    const BASE_URL = "http://api.ipify.org";

    public function getPublicIp()
    {
        $req = $this->createHttpRequest(self::BASE_URL);
        $req->send();
        $ip = trim($req->getResponseText());
        return $ip;
    }
}

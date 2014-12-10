<?php

namespace NoccyLabs\PublicIp\Service;

class TelizeService extends AbstractService
{
    const BASE_URL = "http://www.telize.com/ip";

    public function getPublicIp()
    {
        $req = $this->createHttpRequest(self::BASE_URL);
        $req->send();
        $ip = trim($req->getResponseText());
        return $ip;
    }
}

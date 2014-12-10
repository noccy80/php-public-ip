<?php

namespace NoccyLabs\PublicIp\Service;

class WhatIsMyIpAddressService extends AbstractService
{
    const BASE_URL = "http://bot.whatismyipaddress.com";

    public function getPublicIp()
    {
        $req = $this->createHttpRequest(self::BASE_URL);
        $req->send();
        $ip = trim($req->getResponseText());
        return $ip;
    }
}

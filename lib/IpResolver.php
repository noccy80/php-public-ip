<?php

namespace NoccyLabs\PublicIp;

class IpResolver
{
    protected static $resolvers = [];

    public static function getPublicIp()
    {
        $resolvers = shuffle(self::$resolvers);
        foreach (self::$resolvers as $resolver) {
            // echo "notice: Testing ". get_class($resolver) . "\n";
            if (NULL !== ($ip = $resolver->getPublicIp())) {
                return $ip;
            }
        }
        throw new \Exception("Failed");
    }
    
    public static function setResolvers(array $resolvers)
    {
        self::$resolvers = $resolvers;
    }
}

IpResolver::setResolvers([
    new Service\WhatIsMyIpAddressService(),
    new Service\IpifyService(),
    new Service\TelizeService(),
]);

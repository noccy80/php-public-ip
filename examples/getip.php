<?php

require_once __DIR__."/../vendor/autoload.php";

use NoccyLabs\PublicIp\IpResolver;

$ip = IpResolver::getPublicIp();

echo "IP = {$ip}\n";

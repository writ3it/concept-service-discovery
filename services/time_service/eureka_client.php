<?php

use Eureka\EurekaClient;

$config = [
    'eurekaDefaultUrl' => getenv('EUREKA_URL'), 
    'hostName' => getenv('EUREKA_SERVICE_HOSTNAME'),
    'appName' => getenv('EUREKA_APP_NAME'),
    
    'ip' => getenv('SERVICE_IP'),
    'port' => [getenv('SERVICE_PORT'), 'true'],
    'securePort' => [443, 'false'],
    'homePageUrl' => getenv('EUREKA_SERVICE_HOMEPAGE'),
    'statusPageUrl' => getenv('EUREKA_SERVICE_HOMEPAGE'),
    'healthCheckUrl'=> getenv('EUREKA_SERVICE_HOMEPAGE'),
    'heartbeatInterval'=>2,
];

return new EurekaClient($config);

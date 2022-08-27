<?php
require_once 'vendor/autoload.php';

use Eureka\EurekaClient;

/**
 * @var EurekaClient $serviceDiscovery
 */
$serviceDiscovery = require_once 'eureka_client.php';

$instance = $serviceDiscovery->fetchInstance('time-service');

$time = file_get_contents($instance->homePageUrl);

header('Content-Type: application/json');
echo $time;
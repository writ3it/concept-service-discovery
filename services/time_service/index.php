<?php
header('Content-Type: application/json');
echo json_encode([
    'current_time'=>date("Y-m-d H:i:s"),
    'instance_id'=>getenv('EUREKA_SERVICE_HOSTNAME'),
    'app'=>getenv('EUREKA_APP_NAME'),
    'home_url'=>getenv('EUREKA_SERVICE_HOMEPAGE')
]);
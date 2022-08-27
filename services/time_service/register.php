<?php

require_once 'vendor/autoload.php';

use Eureka\EurekaClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

echo "[Register] Hello world!\n";
flush();
do{
    sleep(1);
    echo "[Register] Waiting for eureka host...\n";
    flush();
    $status = @file_get_contents(getenv('EUREKA_PING_URL'));

} while($status === false);

echo "[Register] Eureka host available!\n";
flush();
/**
 * @var EurekaClient $client
 */
$client = require_once 'eureka_client.php';
try {
    $client->register();
} catch (ServerException $e){
    var_dump($e->getResponse()->getBody()->getContents());
    die();
}
$client->start();
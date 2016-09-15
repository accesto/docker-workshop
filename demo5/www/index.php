<?php
require_once __DIR__.'/vendor/autoload.php';

$client = new Predis\Client(['host' => 'redis']);
$counter = $client->incr('counter');

echo "Hostname: ".gethostname().PHP_EOL;
echo "AHAh: Counter: ".$counter.PHP_EOL;


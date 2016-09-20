<?php
require 'vendor/autoload.php'; // include Composer goodies
$mongo =  new MongoDB\Client('mongodb://mongodb');
$requests = $mongo->docker->requests;
$request = ['time' => new \DateTime(), 'host' => gethostname(), 'ip' => $_SERVER['REMOTE_ADDR']];
$requests->insertOne($request);
$count = $requests->count();
$lastRequests = $requests->find([], ['sort' => ['time' => -1], 'limit' => 10]);

echo 'Host: '.$request['host'].' ;<br/>'.PHP_EOL;
echo 'Counter: '.$count.' ;<br/>'.PHP_EOL;

echo '<h1>Last Requests</h1>';
echo '<table border="1">';
echo '<tr><td>IP</td><td>Host</td><td>Time</td></tr>';
foreach ($lastRequests as $request)
{
    echo '<tr><td>'.$request['ip'].'</td><td>'.$request['host'].'</td><td>'.$request['time']['date'].'</td></tr>';
}
echo '</table>';

<?php

require 'vendor/autoload.php';

$rackspace = new Rackspace\Rackspace([
    'username' => '{username}',
    'apiKey'   => '{apiKey}',
]);

$service = $rackspace->queueV1(['region' => '{region}']);

$queue = $service->getQueue('{id}');
$queue->delete();
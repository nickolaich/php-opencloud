<?php

require 'vendor/autoload.php';

$rackspace = new Rackspace\Rackspace([
    'username' => '{username}',
    'apiKey'   => '{apiKey}',
]);

$service = $rackspace->queueV1(['region' => '{region}']);

$message = $service->getMessage('{id}');
$message->delete();
<?php

require 'vendor/autoload.php';

$rackspace = new Rackspace\Rackspace([
    'username' => '{username}',
    'apiKey'   => '{apiKey}',
]);

$service = $rackspace->computeV2(['region' => '{region}']);

/** @var \Rackspace\Compute\v2\Models\Server $server */
$server = $service->getServer('{serverId}');

/** @var \Rackspace\Compute\v2\Models\VolumeAttachment $volumeAttachment */
$volumeAttachment = $server->getVolumeAttachment('{attachmentId}');

// By default, this will return an empty object and NOT hit the API.
// This is convenient for when you want to use the object for operations
// that do not require an initial GET request. To retrieve the resource's details,
// run the following, which *will* call the API with a GET request:

$volumeAttachment->retrieve();
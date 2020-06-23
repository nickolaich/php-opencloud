<?php declare(strict_types=1);

namespace Rackspace\Identity\v2;

use GuzzleHttp\ClientInterface;

class Service extends \OpenStack\Identity\v2\Service
{
    public static function factory(ClientInterface $client): parent
    {
        return new static($client, new Api());
    }
}

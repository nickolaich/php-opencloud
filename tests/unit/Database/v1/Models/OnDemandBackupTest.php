<?php

namespace Rackspace\Test\Database\v1\Models;

use OpenStack\Test\TestCase;
use Rackspace\Database\v1\Api;
use Rackspace\Database\v1\Models\OnDemandBackup;

class OnDemandBackupTest extends TestCase
{
    private $backup;

    public function setUp()
    {
        parent::setUp();

        $this->rootFixturesDir = dirname(__DIR__);

        $this->backup = new OnDemandBackup($this->client->reveal(), new Api());
    }

    public function test_it_creates()
    {
    }

    public function test_it_lists()
    {
    }

    public function test_it_deletes()
    {
    }

    public function test_it_retrieves()
    {
    }
}
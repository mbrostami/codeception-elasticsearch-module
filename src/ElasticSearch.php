<?php

namespace Codeception\Module;

use Codeception\Module;

class ElasticSearch extends Module
{
	protected $requiredFields = array('host', 'type');

    public function seed()
    {
        $this->debug("Hello seeder!");
    }

}
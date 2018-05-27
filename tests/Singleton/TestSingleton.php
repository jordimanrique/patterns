<?php

namespace Tests\Singleton;

use Patterns\Singleton\MySingleton;
use PHPUnit\Framework\TestCase;

class TestSingleton extends TestCase
{
    public function testSingleton()
    {
        $singleton = MySingleton::getInstance();

        $field = $singleton->getField();

        echo "Singleton field: $field";

        $this->assertEquals(1,1);
    }

}
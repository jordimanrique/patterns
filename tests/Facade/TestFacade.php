<?php

namespace Tests\Facade;

use Patterns\Facade\RemoteControlFacade;
use Patterns\Facade\Subsystem\Dolby;
use Patterns\Facade\Subsystem\TV;
use PHPUnit\Framework\TestCase;

class TestFacade extends TestCase
{
    public function testFacade()
    {
        $tv = new TV();
        $dolby = new Dolby();

        $remoteControlFacade = new RemoteControlFacade($dolby, $tv);

        $remoteControlFacade->onWithDolby();

        $remoteControlFacade->off();

        $remoteControlFacade->onWithoutDolby();


        $this->assertEquals(1,1);
    }
}

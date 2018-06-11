<?php

namespace Patterns\Facade;

use Patterns\Facade\Subsystem\Dolby;
use Patterns\Facade\Subsystem\TV;

class RemoteControlFacade implements RemoteControl
{
    /** @var Dolby */
    private $dolby;
    /** @var TV */
    private $tv;

    public function __construct(Dolby $dolby, TV $tv)
    {
        $this->dolby = $dolby;
        $this->tv = $tv;
    }

    public function onWithDolby()
    {
        $this->tv->on();
        $this->tv->changeChannel(0);
        $this->tv->setVolume(0);
        $this->dolby->on();
        $this->dolby->setVolume(100);
    }

    public function onWithoutDolby()
    {
        $this->tv->on();
        $this->tv->changeChannel(0);
        $this->tv->setVolume(100);
    }

    public function off()
    {
        $this->tv->off();
        $this->dolby->off();
    }
}
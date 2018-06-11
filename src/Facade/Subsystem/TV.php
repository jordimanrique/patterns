<?php

namespace Patterns\Facade\Subsystem;

class TV
{
    public function on()
    {
        echo '[TV] You pressed ON'.PHP_EOL;
    }

    public function off()
    {
        echo '[TV] You pressed OFF'.PHP_EOL;
    }

    public function changeChannel(int $channel)
    {
        echo '[TV] You pressed channel '.$channel.PHP_EOL;
    }

    public function setVolume(int $volume)
    {
        echo '[TV] You pressed volume '.$volume.PHP_EOL;
    }
}

<?php

namespace Patterns\Facade\Subsystem;

class Dolby
{
    public function on()
    {
        echo '[DOLBY] You pressed ON'.PHP_EOL;
    }

    public function off()
    {
        echo '[DOLBY] You pressed OFF'.PHP_EOL;
    }

    public function setVolume(int $volume)
    {
        echo '[DOLBY] You pressed volume '.$volume.PHP_EOL;
    }
}

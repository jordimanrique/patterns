<?php

namespace Patterns\Command\Receivers;

class TV
{
    public function on()
    {
        echo 'You have pressed ON of Light'.PHP_EOL;
    }

    public function off()
    {
        echo 'You have pressed OFF of Light'.PHP_EOL;
    }

    public function changeChannel(int $channel)
    {
        echo 'You have changed the channel: '.$channel.PHP_EOL;
    }
}

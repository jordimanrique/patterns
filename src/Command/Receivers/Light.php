<?php

namespace Patterns\Command\Receivers;

class Light
{
    public function on()
    {
        echo 'You have pressed ON of Light'.PHP_EOL;
    }

    public function off()
    {
        echo 'You have pressed OFF of Light'.PHP_EOL;
    }
}

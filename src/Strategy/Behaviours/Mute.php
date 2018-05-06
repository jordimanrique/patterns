<?php

namespace Patterns\Strategy\Behaviours;

use Patterns\Strategy\Behaviour;

class Mute implements Behaviour
{
    public function makeBehaviour()
    {
        echo "I'm making NO SOUND because I'm mute";
    }
}